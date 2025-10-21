<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function index() {
        $titulo = "Login de usuarios";
        return view("modules.auth.login", compact("titulo"));
    }

    public function logear(Request $request) {
        // --- BLOQUEO POR 2 INTENTOS FALLIDOS (TEMPORIZADOR 10 SEGUNDOS) ---
        // Si hay bloqueo activo en la sesión, no permite loguear
        if (session('bloqueo_hasta') && now()->lessThan(session('bloqueo_hasta'))) {
            return back()
                ->withErrors(['email' => 'Demasiados intentos. Espera para volver a intentar.'])
                ->with('bloqueo_hasta', session('bloqueo_hasta'))
                ->withInput();
        }

        // Limitar intentos de login por IP y email (RateLimiter de Laravel)
        $throttleKey = strtolower($request->input('email')).'|'.$request->ip();
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            return back()->withErrors([
                'email' => "Demasiados intentos. Intenta de nuevo en {$seconds} segundos."
            ])->withInput();
        }

        // Validar datos de las credenciales
        $credenciales = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Buscar el email
        $user = User::where('email', $request->email)->first();

        // Validar usuario, contraseña y si está activo
        if(!$user || !Hash::check($request->password, $user->password) || !$user->activo){
            RateLimiter::hit($throttleKey, 60); // Penaliza por 60 segundos

            // Control de intentos fallidos en sesión
            $intentos = session('intentos_login', 0) + 1;
            session(['intentos_login' => $intentos]);

            if ($intentos >= 2) {
                $bloqueo = now()->addSeconds(10);
                session(['bloqueo_hasta' => $bloqueo]);
                session(['intentos_login' => 0]); // Reinicia el contador
                return back()
                    ->withErrors(['email' => 'Demasiados intentos. Espera para volver a intentar.'])
                    ->with('bloqueo_hasta', $bloqueo)
                    ->withInput();
            }

            return back()->withErrors(['email' => 'Credenciales incorrectas!'])->withInput();
        }

        // Si todo es correcto, limpia el contador de intentos y bloqueo
        RateLimiter::clear($throttleKey);
        session()->forget(['intentos_login', 'bloqueo_hasta']);

        // Crear la sesión de usuario
        Auth::login($user);
        $request->session()->regenerate();

        return to_route('home');
    }

    // Método crearAdmin comentado por seguridad
    // public function crearAdmin(){
    //     User::create([
    //         'name' => 'joel',
    //         'email' => 'admin@admin.com',
    //         'password' => Hash::make('admin'),
    //         'activo' => true,
    //         'rol' => 'admin'
    //     ]);
    //     return "Admin creado con exito!!";
    // }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('login');
    }
}
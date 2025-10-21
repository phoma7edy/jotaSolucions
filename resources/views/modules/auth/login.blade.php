@extends('layouts.login')

@section('titulo', $titulo )
@section('contenido')

<!-- Solo diseño, sin autenticación -->
<header id="header" class="bg-danger header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo.jpg') }}" alt="">
            <span class="d-none d-lg-block">Importadora Guty</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <i class="fa-regular fa-circle-user"></i>
                    <span class="d-none d-md-block dropdown-toggle ps-2">Invitado</span>
                </a><!-- End Profile Image Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Invitado</h6>
                        <span>Sin sesión</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <!-- Botón para abrir el modal de login -->
                        <a class="dropdown-item d-flex align-items-center" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <span>Iniciar sesión</span>
                        </a>
                    </li>
                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->
</header>
<main>

<div class="container mb-5">
<!-- Espacio para compensar la navbar fixed-top -->
<div class="pt-5 mt-5"></div>

<!-- Carousel con nuevas imágenes de hardware --> 
<div class="row">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1562976540-1502c2145186?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=400&q=80" class="d-block w-100" alt="RAM">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
          <h5>Memorias RAM</h5>
          <p>Alta velocidad para tu equipo</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1601737487795-dab272f52420?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=400&q=80" class="d-block w-100" alt="Disco Duro">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
          <h5>Discos Duros</h5>
          <p>Almacenamiento seguro y veloz</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1603302576837-37561b2e2302?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=400&q=80" class="d-block w-100" alt="Portátiles">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
          <h5>Portátiles</h5>
          <p>Movilidad y rendimiento</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=400&q=80" class="d-block w-100" alt="CPU">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
          <h5>Procesadores</h5>
          <p>El corazón de tu equipo</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1616763355548-1b606f439f86?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&h=400&q=80" class="d-block w-100" alt="Monitor">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
          <h5>Monitores</h5>
          <p>Alta definición para tu vista</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>      

<div class="row">
  <div class="row row-cols-1 text-center mt-5 mb-3">
    <h2>Productos</h2>
  </div>

  {{-- Portátiles --}}
  <div class="mb-4">
    <h3 class="mb-3">Portátiles</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- ... tarjetas de portátiles ... -->
      @for ($i = 1; $i <= 9; $i++)
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('img/' . $i . '.png') }}" class="card-img-top product-img" alt="Portátil {{ $i }}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Portátil Modelo {{ $i }}</h5>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </div>

  {{-- PC --}}
  <div class="mb-4">
    <h3 class="mb-3">PC</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @for ($i = 11; $i <= 19; $i++)
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('img/' . $i . '.png') }}" class="card-img-top product-img" alt="PC {{ $i-10 }}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">PC Modelo {{ $i-10 }}</h5>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </div>

  {{-- Repuestos --}}
  <div class="mb-4">
    <h3 class="mb-3">Repuestos</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @php $repuestos = [21,22,23,24,18,15,9,11,19]; @endphp
      @foreach ($repuestos as $idx => $img)
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="{{ asset('img/' . $img . '.png') }}" class="card-img-top product-img" alt="Repuesto {{ $idx+1 }}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Repuesto {{ $idx+1 }}</h5>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>  
<!-- Estilos adicionales -->
<style>
  .product-img {
    height: 250px;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
  }
  .product-img:hover {
    transform: scale(1.05);
  }
</style> 
</div>


<!-- ...existing code arriba... -->

<!-- Modal de Login -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
          <form id="loginForm" class="row g-3 needs-validation" novalidate method="POST" action="{{ route('logear') }}">
            @csrf
            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <div class="input-group has-validation">
                <input type="text" name="email" class="form-control" id="email" required>
                <div class="invalid-feedback">Escribe tu correo</div>
              </div>
            </div>
            <div class="col-12">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" required>
              <div class="invalid-feedback">Escribe tu contraseña!</div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100" id="loginBtn" type="submit">Login</button>
            </div>
            @if ($errors->any())
              <div class="col-12 mt-2">
                <div class="alert alert-danger">
                  <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
            @endif

            {{-- TEMPORIZADOR DE BLOQUEO --}}
            @if(session('bloqueo_hasta'))
                @php
                    $segundosRestantes = \Carbon\Carbon::parse(session('bloqueo_hasta'))->diffInSeconds(now(), false);
                @endphp
                @if($segundosRestantes > 0)
                    <div class="alert alert-warning text-center w-100">
                        Demasiados intentos. Espera <span id="timer">{{ $segundosRestantes }}</span> segundos para volver a intentar.
                    </div>
                @endif
            @endif

          </form>
          <div id="bloqueoMsg" class="alert alert-warning text-center w-100 mt-2" style="display:none;">
              Has superado el número de intentos. Espera para volver a intentar.
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
      let intentos = parseInt(localStorage.getItem('login_intentos') || '0');
      const loginForm = document.getElementById('loginForm');
      const emailInput = document.getElementById('email');
      const passInput = document.getElementById('password');
      const bloqueoMsg = document.getElementById('bloqueoMsg');

      function desbloquearCampos() {
          intentos = 0;
          localStorage.setItem('login_intentos', intentos);
          emailInput.disabled = false;
          passInput.disabled = false;
          bloqueoMsg.style.display = 'none';
      }

      // Si ya está bloqueado, bloquear campos y poner temporizador
      if(intentos >= 2){
          emailInput.disabled = true;
          passInput.disabled = true;
          bloqueoMsg.style.display = 'block';
          setTimeout(desbloquearCampos, 10000); // 10 segundos
      }

      if(loginForm){
          loginForm.addEventListener('submit', function(e){
              intentos++;
              localStorage.setItem('login_intentos', intentos);
              if(intentos >= 2){
                  e.preventDefault();
                  emailInput.disabled = true;
                  passInput.disabled = true;
                  bloqueoMsg.style.display = 'block';
                  setTimeout(desbloquearCampos, 10000); // 10 segundos
              }
          });
      }
  });
  </script>


  @if ($errors->any() || (session('bloqueo_hasta') && \Carbon\Carbon::parse(session('bloqueo_hasta'))->diffInSeconds(now(), false) > 0))
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
          loginModal.show();
      });
  </script>
  @endif

<!-- ...existing code abajo... -->




</main>
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>JotaSolutions</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://JotaSolutions.com.bo/">JotaSolutions</a>
    </div>
</footer>
@endsection
@extends('layouts.login')

@section('titulo', $titulo )
@section('contenido')
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

<!-- Productos (antes "Planes") --> 
<div class="row">
  <div class="row row-cols-1 text-center mt-5 mb-3">
    <h2>Productos</h2>
  </div>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Laptops</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">20%<small class="text-muted fw-light"> descuento</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Multimarca</li>
            <li>Diferentes capacidades</li>
            <li>Garantía 1 año</li>
            <li>Soporte técnico incluido</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-outline-primary">Ver modelos</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">PC</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">20%<small class="text-muted fw-light"> descuento</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Equipos de escritorio</li>
            <li>Múltiples configuraciones</li>
            <li>Garantía 1 año</li>
            <li>Soporte técnico incluido</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-primary">Ver modelos</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm border-primary">
        <div class="card-header py-3 text-white bg-primary border-primary">
          <h4 class="my-0 fw-normal">Repuestos</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">20%<small class="text-muted fw-light"> descuento</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Componentes diversos</li>
            <li>Marcas reconocidas</li>
            <li>Garantía de fábrica</li>
            <li>Asesoría en instalación</li>
          </ul>
          <button type="button" class="w-100 btn btn-lg btn-primary">Ver catálogo</button>
        </div>
      </div>
    </div>
  </div>          
</div>

<!-- Newsletter -->
<div class="row">
  <div class="row row-cols-1 text-center mt-5 mb-3">
    <h2>ingresa tu email para que el encargado te registre</h2>
  </div>
  <div class="row">
    <form action="" method="">
      <div class="row justify-content-center">
        <div class="col-lg-6">
        
          <div class="input-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="micorreo@mail.com" required> 
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit">Aceptar</button>
            </span>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

</div>


    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
       <!-- Archivo CSS Bootstrap 5 - Único CSS usado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="https://nubecolectiva.com/favicon.ico"> 
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  
                </a>
              </div><!-- End Logo -->

              {{-- <div class="card mb-3">

                <div class="card-body">
                  <img src="{{ asset('img/jota.jpg') }}" alt="" class="img-fluid">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">accede con tu correo y tu contraseña</h5>
                    
                  </div>
                  <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('logear') }}">
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
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>
                  <!--Validacion que viene de logear-->
                  <div>
                    @if ($errors->any())
                      <p>
                        <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </p>
                    @endif
                  </div>
                </div>
              </div> --}}

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Desarrollo por <a target="_blank" href="https://jotaSolutions.com.dev/">Jota-solutions S.A.</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
@endsection
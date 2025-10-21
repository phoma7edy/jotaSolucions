@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">
  <div class="pagetitle">
    <h1>Dashboard</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bienvenido, {{ Auth::user()->name }}!</h5>
            <div class="row">
              <div class="col">
                <h4>Total de ventas: ${{ number_format($totalVentas, 2) }}</h4>
              </div>
              <div class="col">
                <h4>Cantidad de Ventas: {{ $cantidadVentas }}</h4>
              </div>
              <div class="col">
                <h4>Productos con bajo stock: {{ count($productosBajosStock) }}</h4>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <h3>Ultimas Ventas</h3>
                <ul>
                  @foreach ($ventasRecientes as $item)
                    <li>Venta # {{ $item->id }} -  ${{ number_format($item->total_venta, 2) }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

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
    <!-- Productos agrupados por categoría -->
    <!-- Productos agrupados por categoría -->
<div class="row">
  <div class="row row-cols-1 text-center mt-5 mb-3">
    <h2>Productos</h2>
  </div>

  {{-- Portátiles --}}
{{-- Portátiles --}}
<div class="mb-4">
  <h3 class="mb-3">Portátiles</h3>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/1.png') }}" class="card-img-top product-img" alt="Portátil 1">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 1</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1600</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/2.png') }}" class="card-img-top product-img" alt="Portátil 2">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 2</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1700</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/3.png') }}" class="card-img-top product-img" alt="Portátil 3">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 3</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1800</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/4.png') }}" class="card-img-top product-img" alt="Portátil 4">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 4</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1900</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/5.png') }}" class="card-img-top product-img" alt="Portátil 5">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 5</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 2000</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/6.png') }}" class="card-img-top product-img" alt="Portátil 6">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 6</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 2100</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/7.png') }}" class="card-img-top product-img" alt="Portátil 7">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 7</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 2200</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/8.png') }}" class="card-img-top product-img" alt="Portátil 8">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 8</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 2300</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/9.png') }}" class="card-img-top product-img" alt="Portátil 9">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Portátil Modelo 9</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 2400</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
  </div>
</div>

{{-- PC --}}
<div class="mb-4">
  <h3 class="mb-3">PC</h3>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/11.png') }}" class="card-img-top product-img" alt="PC 1">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 1</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1280</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/12.png') }}" class="card-img-top product-img" alt="PC 2">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 2</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1360</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/13.png') }}" class="card-img-top product-img" alt="PC 3">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 3</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1440</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/14.png') }}" class="card-img-top product-img" alt="PC 4">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 4</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1520</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/15.png') }}" class="card-img-top product-img" alt="PC 5">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 5</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1600</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/16.png') }}" class="card-img-top product-img" alt="PC 6">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 6</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1680</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/17.png') }}" class="card-img-top product-img" alt="PC 7">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 7</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1760</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/18.png') }}" class="card-img-top product-img" alt="PC 8">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 8</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1840</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/19.png') }}" class="card-img-top product-img" alt="PC 9">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">PC Modelo 9</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 1920</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
  </div>
</div>

  {{-- Repuestos --}}
<div class="mb-4">
  <h3 class="mb-3">Repuestos</h3>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/21.png') }}" class="card-img-top product-img" alt="Repuesto 1">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 1</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 120</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/22.png') }}" class="card-img-top product-img" alt="Repuesto 2">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 2</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 140</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/23.png') }}" class="card-img-top product-img" alt="Repuesto 3">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 3</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 160</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/24.png') }}" class="card-img-top product-img" alt="Repuesto 4">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 4</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 180</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/18.png') }}" class="card-img-top product-img" alt="Repuesto 5">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 5</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 200</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/15.png') }}" class="card-img-top product-img" alt="Repuesto 6">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 6</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 220</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/9.png') }}" class="card-img-top product-img" alt="Repuesto 7">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 7</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 240</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/11.png') }}" class="card-img-top product-img" alt="Repuesto 8">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 8</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 260</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100 shadow-sm">
        <img src="{{ asset('img/19.png') }}" class="card-img-top product-img" alt="Repuesto 9">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Repuesto 9</h5>
          @auth
            <p class="card-text text-muted mb-2">S/. 280</p>
            {{-- <button class="btn btn-dark mt-auto">Añadir al carrito</button> --}}
          @endauth
        </div>
      </div>
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
</main>
@endsection
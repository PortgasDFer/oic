@extends('layouts.sitio')
@section('content')
<!-- Barra de navegacion NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
<div class="container">
  <a class="navbar-brand" href="/"><img src="/img/logo__horizontal.webp" height="73px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fa fa-bars"></span> Menu </button>
  <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>
      <li class="nav-item"><a href="/nosotros" class="nav-link">Nosotros</a></li>
      <li class="nav-item"><a href="/curso" class="nav-link">Curso Gratis</a></li>
      <li class="nav-item"><a href="/servicios" class="nav-link">servicios</a></li>
      <li class="nav-item"><a href="/foro" class="nav-link">foro</a></li>
      <li class="nav-item"><a href="/temas " class="nav-link">temas de interés</a></li>
      <li class="nav-item"><a href="/mi-historia" class="nav-link">mi historia</a></li>
    </ul>
  </div>
</div>
</nav>
<!-- END nav -->
 <!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('/eventos/{{$detalle->imagen}}');"data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
      	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Inicio <i class="ion-ios-arrow-forward"></i></a></span></p>
        <h1 class="mb-0 bread">{{$detalle->titulo}}</h1>
      </div>
    </div>
  </div>
</section>

    <section class="ftco-section d-fel">
        <div class="container">
            <div class="row">
                <div class="col-lg-14">
                    <div class="section-title about-title">
                        <h2>{{$detalle->titulo}}</h2>
                        <div class="meta mb-2">
                          <div style="font-size: 16px; color: #007bff;">Fecha del Evento: {{ \Carbon\Carbon::parse($detalle->fecha)->format('d M, Y') }}</div>
                        </div>
                        <p>{!!$detalle->descripcion!!}</p>
                    </div>
                </div>
            </div>
            
             <!--<div class="row">
                <div class="col-lg-14">
                    <div class="about__pic">
                        <img class="img-fluid" src="/eventos/{{$detalle->imagen}}" alt="Responsive image">
                    </div>
                </div>
            </div>-->
        </div>
    </section>

 <!-- .section -->
@endsection
@extends('layouts.sitio')
@section('content')
  <!-- Barra de navegacion NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="img/logo__horizontal.webp" height="73px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto">
          <li class="nav-item"><a href="/" class="nav-link">Inicio</a></li>
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

  <section class="hero-wrap hero-wrap-2" style="background-image: url(site/images/p5.jpg);"data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Inicio <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-0 bread">Pregunta 5: ¿Has sentido miedo a que tu vida cambie después de la contingencia sanitaria?</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-12 heading-section text-center ftco-animate ">
            <h2>“Al abrirte a una perspectiva diferente, enriquecerás y equilibrarás mejor tu propio punto de vista".</h2>
            <span class="subheading" style="font-size: 16px;">-Tony Robbins</span><br>
          </div>
        </div>   
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 heading-section text-justify ftco-animate ">                
                <h4>Si te sientes acorralado es importante que comprendas lo que te impide seguir hacia adelante. Esto puede sonarte cotidiano en teoría pero cuando quieres ser diferente puede convertirse en una gran lucha en tu vida cotidiana. Cuando se llega a ese punto de estancamiento la mayoría de las personas pueden verse abrumadas por sus intentos de liberarse de la rutina diaria. Muchas veces lo intentamos realizamos muchas cosas para liberarnos pero sin lograr o llegar a una situación concreta. Ahí nos quedamos atascados en nuestra existencia, porque no permitimos a nosotros mismos ser lo que queremos ser, siempre copiamos todo lo que hacen los demás. Nos adaptamos fácilmente a la diferentes roles que las personas a nuestro alrededor esperan que nosotros hagamos. Esto en definitiva no nos gusta pero en el fondo estamos convencidos de que es imposible de realizar nuestros sueños, realizarnos en lo que más nos gusta o apasiona hacer, quieres un cambio radical, permítenos ayudarte, acompañarte a través de los tres principios y lograr tus sueños que tanto anhelas.</h4>     
            </div>
        </div>
      </div>
    </section>
@endsection
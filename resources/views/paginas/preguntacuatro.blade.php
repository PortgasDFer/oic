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

  <section class="hero-wrap hero-wrap-2" style="background-image: url(site/images/p4.jpg);"data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Inicio <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-0 bread">Pregunta 4: ¿Has llegado a pensar qué dirección debes darle a tu vida?</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-12 heading-section text-center ftco-animate ">
            <h2>“No importa cómo vayas de lento, siempre y cuando no te detengas".</h2>
            <span class="subheading" style="font-size: 16px;">-Confucio</span><br>
          </div>
        </div>   
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 heading-section text-justify ftco-animate ">                
                <h4>La carencia de confianza. “La desconfianza” es falta de credibilidad en ti mismo, en alguien o en algo, sabias que es una emoción negativa que implica falta de seguridad sobre las acciones y actitudes que una persona puede tener hacia otra, todos los seres humanos en algún momento de nuestra vida hemos sentido inseguridad y falta de credibilidad, falta de confianza en nosotros mismos, formando una gran muralla entre lo que actualmente somos y lo que pretendemos ser.<br><br>
                La carencia de confianza puede limitar todo el potencial que tienes y, se convierte en un obstáculo para lograr lo que quieres. Pero, la buena noticia es que dejar de sentir miedo y ganar más confianza es una habilidad que se aprende y se entrena. La falta de confianza en sí mismo, sin duda se relaciona con el miedo. Al final si no crees en ti mismo, sientes miedo de no poder lograr lo que te propones y ni siquiera lo intentas. Este tipo de miedo, se puede experimentar cuando quieres cambiar tus hábitos.
              </h4>     
            </div>
        </div>
      </div>
    </section>
@endsection
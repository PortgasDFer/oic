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

  <section class="hero-wrap hero-wrap-2" style="background-image: url(site/images/p1.jpg);"data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Inicio <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-0 bread">Pregunta 1. ¿Has sentido que tu vida es un túnel sin salida?</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-12 heading-section text-center ftco-animate ">
            <h2>“La vida nunca es estancamiento. Es movimiento constante, movimiento sin ritmo, pues nosotros cambiamos constantemente. Las cosas viven moviéndose y ganan fuerza mientras lo hacen”.</h2>
            <span class="subheading" style="font-size: 16px;">-Bruce Lee</span><br>
          </div>
        </div>   
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 heading-section text-justify ftco-animate ">                
                <h4>Cuando sentimos que la vida nos mantiene ajenos a nuestras metas y objetivos; que por más que nos preparemos, busquemos nuevos trabajos o imploremos por nuevas oportunidades, sencillamente no lo conseguimos.<br><br>
                Recordar cómo pensábamos que sería nuestra vida; comparar en lo que se ha convertido, inevitablemente, nos invade la frustración, ¿Cierto?.<br><br>
                Vivimos en el “algún día” que parece alejarse cada vez más del presente:
                <ul>
                  <li>Algún día…obtendré un ascenso</li>
                  <li>Algún día…comprare un auto</li>
                  <li>Algún día…tendré la casa de mis sueños.</li>
                  <li>Algún día…conseguiré un empleo bien remunerado.</li>
                </ul>
                <br>
                La pregunta es ¿nuestros sueños solo vivirán en “algún día”? ¡No! Permítenos acompañarte en este proceso de cambio, donde te brindaré las herramientas necesarias para que tú mism@ encuentres la luz de este túnel sin salida.
                No te dejes llevar por una voz interna que te dice “las cosas no van a cambiar”, te enseñare que tú mismo tienes la capacidad de superar las limitaciones que anidan en tu mente, solo necesitas un acompañamiento profesional que te muestre el camino para llegar a la acción y así, dejar de vivir en ese “algún día”.
              </h4>     
            </div>
        </div>
      </div>
    </section>
@endsection
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

  <section class="hero-wrap hero-wrap-2" style="background-image: url(site/images/p3.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Inicio <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-0 bread">Pregunta 3: ¿Cuántas veces has evadido de responder aquello que te gusta o disgusta porque sientes que no te conoces?</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-12 heading-section text-center ftco-animate ">
            <h2>¡Conócete a ti mismo!</h2>
            <span class="subheading" style="font-size: 16px;">-Sócrates</span><br>
          </div>
        </div>   
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 heading-section text-justify ftco-animate ">                
                <h4>¿Te ha ocurrido que en ciclos de presentación te preguntan tu película favorita, tu música predilecta y no sabes que responder? O bien, ¿estas teniendo dificultades para escoger carrera, no te sientes satisfecho con tu profesión, sientes que nada te llena al 100%?.<br><br>
                No estás sol@, ya que el autoconocimiento es un proceso que necesita ayuda de un profesional que te guíe y brinde herramientas para poder lograrlo, por supuesto, tu tendrás el papel estelar.<br><br>
                Este proceso de conocimiento propio es importante en tu vida, pues no solo podrás responder más de quién eres tú y tus gustos, sino que podrás aceptarte, tomar decisiones adecuadas para tu vida y disfrutar de éstas.<br><br>
                Te invito a darnos la oportunidad de acompañarte en el camino del autoconocimiento.
              </h4>     
            </div>
        </div>
      </div>
    </section>
@endsection
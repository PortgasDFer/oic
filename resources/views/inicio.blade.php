@extends('layouts.sitio')
@section('content')
  <!-- Barra de navegacion NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
    <div class="container">      
      <a class="navbar-brand" href="/"><img src="img/logo__horizontal.webp" height="73px;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>
          <li class="nav-item"><a href="/nosotros" class="nav-link">Nosotros</a></li>
          <li class="nav-item"><a href="/curso" class="nav-link">Curso Gratis</a></li>
          <li class="nav-item"><a href="/servicios" class="nav-link">servicios</a></li>
          <li class="nav-item"><a href="/foro" class="nav-link">foro</a></li>
          <li class="nav-item"><a href="/temas" class="nav-link">temas de interés</a></li>
          <li class="nav-item"><a href="/mi-historia" class="nav-link">mi historia</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- END nav -->
    <section class="bg-light">
      <div class="container">
        <div class="row ">
          <div class="col-md-6">
            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(site/images/inicio.webp); height: 100vh;">
              <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                <span class="fa fa-play"></span>
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="services-2 w-100">
              <div class="text-aling-center">
                <center><img src="img/logo__vertical.png"  class="img-fluid">
                <h5  class="img-fluid">Somos una experiencia virtual para vivir la magia de los tres principios con una transformación en acción.</h5></center>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>
 
    <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              <h2>Preguntas</h2>
              <span class="subheading">sin respuesta</span>
            </div>
          </div>
          <div class="cta">
          <div class="row">
              <div class="col-lg-6 col-md-6 d-flex ftco-animate">
                <div class="cta__item set-bg" style="background-image: url(site/images/p1.webp);">
                  <h4>¿Has sentido que tu vida es un túnel sin salida?</h4>
                  <p>“La vida nunca es estancamiento. Es movimiento constante, movimiento sin ritmo, pues nosotros cambiamos constantemente. Las cosas viven moviéndose y ganan fuerza mientras lo hacen.”
                  <br>-Bruce Lee</p>
                  <br>
                  <a href="/Has-sentido-que-tu-vida-es-un-tunel-sin-salida"><button type="button" class="btn btn-outline-light">Ver Más</button></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 d-flex ftco-animate">
                <div class="cta__item set-bg" style="background-image: url(site/images/p2.webp);">
                  <h4>¿Te has limitado en practicar alguna actividad porque crees que no serías el mejor o no tienes futuro en ello?</h4>
                  <p>"El que ha superado sus miedos será verdaderamente libre."
                <br>-Aristóteles</p>
                <br>
                <a href="/Te-has-limitado-en-practicar-alguna-actividad-porque-crees-que-no-serias-el-mejor-o-no-tienes-futuro-en-ello"><button type="button" class="btn btn-outline-light">Ver Más</button></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 d-flex ftco-animate">
                <div class="cta__item set-bg" style="background-image: url(site/images/p3.webp);">
                  <h4>¿Cuántas veces has evadido de responder aquello que te gusta o disgusta porque sientes que no te conoces?</h4>
                  <p>¡Conócete a ti mismo!<br>-Sócrates</p>
                  <br>
                  <a href="/Cuantas-veces-has-evadido-de-responder-aquello-que-te-gusta-o-disgusta-porque-sientes-que-no-te-conoces"><button type="button" class="btn btn-outline-light">Ver Más</button></a>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 d-flex ftco-animate">
                <div class="cta__item set-bg" style="background-image: url(site/images/p4.webp);">
                  <h4>¿Has llegado a pensar qué dirección debes darle a tu vida?</h4>
                  <p>"No importa cómo vayas de lento, siempre y cuando no te detengas.”<br>-Confucio</p>
                  <br>
                  <a href="/Has-llegado-a-pensar-que-direccion-debes-darle-a-tu-vida"><button type="button" class="btn btn-outline-light">Ver Más</button></a>
                </div>
              </div>
              <div class="col-md-12 ftco-animate">
                <div class="cta__item set-bg" style="background-image: url(site/images/p5.webp);">
                  <h4>¿Has sentido miedo a que tu vida cambie después de la contingencia sanitaria?</h4>
                  <p>“Al abrirte a una perspectiva diferente, enriquecerás y equilibrarás mejor tu propio punto de vista”.<br>-Tony Robbins</p>
                  <br>
                  <a href="/Has-sentido-miedo-a-que-tu-vida-cambie-despues-de-la-contingencia-sanitaria"><button type="button" class="btn btn-outline-light">Ver Más</button></a>
                </div>
              </div>
            </div>        
          </div>
        </div>
</section>

    <section class="ftco-section testimony-section bg-light d-flex">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-6 heading-section text-center ftco-animate">
            <h2>Eventos</h2>
            <span class="subheading">Próximos eventos</span>
          </div>
        </div>
        <div class="row">
          @foreach($eve as $e)
         <div class="col-md-4 ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="/eventos/{{$e->slug}}" class="block-20 rounded d-flex" style="background-image: url('/eventos/{{$e->imagen}}'); object-fit:cover;">
              </a>
              <div class="text mt-3" >
                <div class="meta mb-2">
                  <div>{{ \Carbon\Carbon::parse($e->fecha)->format('d M, Y') }}</div>
                </div>
                <h3 class="heading d-flex" ><a href="/eventos/{{$e->slug}}">{{$e->titulo}}</a></h3>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-6 heading-section text-center ftco-animate">
            <h2>Certificaciones</h2>
            <span class="subheading">Contamos con diferentes certificaciones</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-lg-4 d-flex">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(site/images/ICG.webp); width: 400px;"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>ICG</h3>
                <span class="position mb-2">international coaching group</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 d-flex">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(site/images/lf.webp);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Leila Fittipaldi</h3>
                <span class="position mb-2">experta en cuestionamiento y desarrollo del SER</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-lg-4 d-flex">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(site/images/insp.webp);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>INSP</h3>
                <span class="position mb-2">Instituto Nacional de Salud Pública</span>
              </div>
            </div>
          </div>
      </div>
    </section>

@endsection
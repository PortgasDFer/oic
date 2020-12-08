@extends('layouts.sitio')
@section('title','Curso Gratis')
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
          <li class="nav-item active"><a href="/curso" class="nav-link">Curso Gratis</a></li>
          <li class="nav-item"><a href="/servicios" class="nav-link">servicios</a></li>
          <li class="nav-item"><a href="/foro" class="nav-link">foro</a></li>
          <li class="nav-item"><a href="/temas " class="nav-link">temas de interés</a></li>
          <li class="nav-item"><a href="/mi-historia" class="nav-link">mi historia</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  <section class="hero-wrap hero-wrap-2" style="background-image: url('site/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Inicio <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-0 bread">Curso Gratis</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Coaching Energy Center</h2>
            <span class="subheading">(Centro de Energía de Entrenamiento)</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="block-7">
              <div class="text-center">
                <br>
              <span class="price"><h3>¿Qué aprenderás en este curso?</h3>
              <br>              
              <ul class="pricing-text mb-5">
                <li><span class="fa fa-check mr-2"></span>Descubrirás cómo se forma esa conexión con el universo, con tú energía, con tú espíritu, con tú Yo Interno</li>
                <li><span class="fa fa-check mr-2"></span>Identificarás la declaración más hermosa y poderosa como lo es el “Yo Soy”</li>
                <li><span class="fa fa-check mr-2"></span>Aprenderás cómo el “YO SOY” es el centro de la conciencia cósmica en el cuerpo humano</li>
                <li><span class="fa fa-check mr-2"></span>Aprenderás a manejar los 3 aspectos importantes (Lenguaje, Cuerpo y Emoción)</li>
              </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section testimony-section bg-secondary">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2>Coaching Energy Center</h2>
            <span class="subheading">Testimonios</span>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4"> Hace tiempo, vivía sola con mis problemas, pensé que no necesitaba ayuda ni acompañamiento de ningún tipo, pensaba que yo podía sola con mis problemas como ama de casa, empresaria y con dos pequeños que cuidar, hoy te doy las gracias porque tus enseñanzas me han servido mucho he aprendido a vencer mis inseguridades y enfrentar la vida con más firmeza y determinación</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Gracián Corpus Vianney</p>
                        <span class="position">Rosario(Argentina)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item" >
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Quiero darte las gracias porque ahora comprendo mí pasado, lo que paso ya paso, actualmente vivo en el aquí y en el ahora, cada consejo que nos das, me ha servido muchísimo en cada determinación de mi vida.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Baños Marcial Gamaliel</p>
                        <span class="position">Cádiz(España)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Hoy quiero agradecerte por tú acompañamiento y transformación que le diste a mi vida. Me ha servido mucho estar en bienestar, tomar decisiones concretas, le ha dado sentido y valor a mí vida. Gracias</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Muñoz Orbe Axel</p>
                        <span class="position">Cartagena(Colombia)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Tus enseñanzas y conocimientos me han servido para aplicarlas a mí vida cotidiana, profesional, deportiva, venciendo mis miedos y enfrentándolos sin tener miedo al fracaso, eso me da seguridad y confianza para lograr todo lo que me propongo en mí vida. Gracias por ayudarme!!.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Bolaños Curiel Bryan Axel</p>
                        <span class="position">Ponce(Puerto Rico)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Gracias por tus palabras y consejos he mejorado mi desempeño personal tener una mente abierta y una actitud positiva en mi trabajo, con mí entrenamiento he mejorado mi relación con mí pareja, pude encontrar solución a muchos de mis problemas, sobre todo encontrarme a mí mismo y saber quién soy. MUCHÍSIMAS GRACIAS!.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Domínguez Curiel Michelle</p>
                        <span class="position">California(Estados Unidos)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Gracias por tú acompañamiento, lo que haces por nosotros, las herramientas que das son precisas y nos aclaran la visión, no importa la situación por el que estemospasando, además con el entendimiento de los tres principios que son mente, pensamiento y conciencia nos ayuda a empoderarnos para poder llevarlos a cabo y vivir en un estado de bienestar.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Olazagasti D´elpidio Denisse</p>
                        <span class="position">Parma(Italia)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Aprovecho la oportunidad de poder agradecerte porque he aprendido mucho a través del acompañamiento que me diste, además, me han fortalecido tus herramientas de coaching, tus herramientas son de gran impacto no sólo en la parte personal sino para mi desarrollo profesional. No importa la distancia siento una paz permanente gracias por tú acompañamiento es muy explícito y concreto.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Salagón Peñaloza Josué</p>
                        <span class="position">Temuco(Chile)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Gracias te agradezco mucho que compartas con nosotros tus conocimientos, cuando me sentía atemorizada con muchos miedos me enseñaste vencer cada temor y sobre todo vencer los miedos, sentí ese empoderamiento para tomar las mejores decisiones para mi vida en el ámbito de mi vida profesional y personal actualmente estoy aplicando las herramientas aprendidas en tú acompañamiento y de verdad mi vida se está transformando de manera positiva.</p>
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">Araujo Viñas Saraí</p>
                        <span class="position">Punta del Este(Uruguay)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
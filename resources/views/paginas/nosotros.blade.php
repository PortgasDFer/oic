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
          <li class="nav-item active"><a href="/nosotros" class="nav-link">Nosotros</a></li>
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

  <section class="hero-wrap hero-wrap-2" style="background-image: url('site/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Inicio <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-0 bread">Nosotros</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container"> 
          <div class="row justify-content-center pb-5 mb-3">
        <div class="col-xs-12 col-sm-12 col-md-6 heading-section text-center ftco-animate ">
          <h2>Misión</h2>
          <span class="subheading fa fa-suitcase"></span><br>
          <h5>Ofrecerte estrategias y recursos para promover una verdadera transformación personal, satisfaciendo siempre las necesidades de nuestros clientes, brindándoles herramientas de coaching, crecimiento, desarrollo personal, empoderamiento, liderazgo con calidad y excelente servicio.</h5>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 heading-section text-center ftco-animate ">
          <h2>Visión</h2>
          <span class="subheading fa fa-sun-o"></span><br>
          <h5>Acompañar el proceso de transformación personal con nuestros clientes y colaboradores a través de un plan de acción de acuerdo a su situación, aportando excelencia y bienestar.</h5> 
        </div>
      </div>   
      <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-10 heading-section text-center ftco-animate ">
          <h2>Valores</h2>
            <span class="subheading fa fa-comments"></span><br>
            <h5>Integridad, Acompañamiento, Pasión, Excelencia, Empatía, Autenticidad, Responsabilidad, Dedicación, Confidencialidad, Honestidad, Integridad profesional, Compromiso, Orientación al logro de Objetivos, Responsabilidad y Respeto.</h5>                      
          </div>
      </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Sobre Los Fundadores</h2>
            <span class="subheading fa fa-users"></span><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-6 ftco-animate">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(site/images/OIC_photo-81.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Jorge Hernández Páez</h3>      
                <span class="position mb-2">Fundador y Director de la ORGANIZACIÓN INTERNACIONAL DE COACHING(OIC)</span>
                <div class="faded">                  
                  <br>                                
                  <span class="fa fa-check mr-2"></span>Coach Profesional con Certificación Internacional.</li><br>
                  <span class="fa fa-check mr-2"></span>Coach Life Facilitador de Liderazgo.<br>
                  <span class="fa fa-check mr-2"></span>Coach con Experiencia en Transformación de Vida. <br><br>
                  <a href="/mi-historia"><span></span>Ver Más...</a>                                  
                  <br>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>        
          <div class="col-md-12 col-lg-6 ftco-animate d-flex">
            <div class="staff">
              <div class="img-wrap d-flex align-items-stretch">
                <div class="img align-self-stretch" style="background-image: url(site/images/OIC_photo-93.jpg);"></div>
              </div>
              <div class="text pt-3 px-3 pb-4 text-center">
                <h3>Angélica Georgina Hernández Nava</h3>
                <span class="position mb-2">CoFundadora y Subdirectora de la ORGANIZACIÓN INTERNACIONAL DE COACHING(OIC)</span>
                <div class="faded">
                  <span class="fa fa-check mr-2"></span>Sex Coach.<br>
                  <span class="fa fa-check mr-2"></span>Ex Presidenta de la Sociedad Estudiantil Club de Oratoria y Debate de la Facultad de Derecho UNAM.<br>
                  <span class="fa fa-check mr-2"></span>Tallerista de Oratoria y Debate.<br>
                  <span class="fa fa-check mr-2"></span>Escritora.<br>
                  <a href="/mi-historia"><span></span>Ver Más...</a>
                  <ul class="ftco-social text-center">
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row ">
          <div class="col-md-12">
            <div class="bg-secondary w-100 rounded p-4">
              <div class="row">
                <div class="col-md-12 d-flex align-items-center ">
                  <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 19px; text-align: center;">Nuestro principal objetivo es  aumentar la capacidad de superación, crecimiento, liderazgo, desarrollo  y bienestar de las personas.</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
              <h2 >Significado de nuestro logotipo</h2>
              <br>
              <img src="img/logo__horizontal.png"  class="img-fluid" style="width: 700px;" alt="ORGANIZACIÓN INTERNACIONAL DE COACHING">
            </div>
          </div>
          <div style="color:black; font-size: 16px; text-align: justify;">
            <hr>
            <p><strong>La&nbsp; Uni&oacute;n, compatibilidad, armon&iacute;a y solidez est&aacute; representada por cuatro personas</strong>, es esa maravillosa acci&oacute;n de crear una nueva vida, un renacimiento l&oacute;gico, donde 5 elementos pilares de diferentes colores c&oacute;mo son: el Amarillo, Azul, Verde, Violeta y Rojo&nbsp; se fusionan para crear un cambio, una nueva transformaci&oacute;n diferente que se conecta por su esencia en s&iacute; mismos, con sus ra&iacute;ces, con sus valores, c&oacute;mo 5 pilares de coaching bien definidos d&oacute;nde existe una l&iacute;nea de comunicaci&oacute;n abierta.</p>
            <p>&nbsp;</p>
            <p><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; La persona con los brazos abiertos&nbsp; el pilar Azul, representa la Libertad</strong> es el actuar seg&uacute;n los valores, criterios, raz&oacute;n y voluntad de cada ser humano, su estado o&nbsp; condici&oacute;n, sentir la libertad de tomar acci&oacute;n siempre con los brazos abiertos para ayudar a ser mejores cada d&iacute;a, con conocimiento de causa, por eso la libertad del coaching inicia&nbsp; con varias preguntas poderosas. &iquest;A d&oacute;nde quieres llegar? &iquest;Qu&eacute; debes de hacer desde hoy (o dejar de hacer) para que puedas llegar a d&oacute;nde quieres?&nbsp;&iquest;Cu&aacute;l es tu situaci&oacute;n actual? &iquest;Qu&eacute; apoyos tienes a t&uacute; alrededor? &iquest;Qu&eacute; caminos pueden llevarte a t&uacute; meta? &iquest;Qu&eacute; otras opciones ves? &iquest;Cu&aacute;ndo vas a dar cada paso?</p>
            <p>&nbsp;</p>
            <p><strong>A continuaci&oacute;n explicaremos los </strong><strong>5 elementos pilares de Coaching con diferentes colores c&oacute;mo son: el Amarillo, Rojo, Verde, Azul y Violeta.&nbsp; </strong></p>
            <p>&nbsp;</p>
            <ol>
              <li><strong>Pilar Amarillo&nbsp; </strong></li>
            </ol>
            <p>El Pilar Amarillo es s&iacute;mbolo de luz, de energ&iacute;a y el poder que tiene el sol, este color m&aacute;gico&nbsp;se ha convertido en un s&iacute;mbolo de la capacidad de ver, de elevarse por encima de todo, de contemplar, de comprender la existencia y la vida misma, representan una fuerza heroica y valiente, que crea, que es gu&iacute;a de la existencia ordenada de las criaturas de la Tierra. Es por eso que el amarillo es el&nbsp;color de&nbsp;la alegr&iacute;a, d&oacute;nde representa la inteligencia, el optimismo, la originalidad y los pensamientos creativos.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>El Pilar amarillo tambi&eacute;n se identifica con la Solidaridad y la Luz</strong></p>
            <p>Uno de los pilares de coaching es la Solidaridad c&oacute;mo vocaci&oacute;n se refiere a la lealtad a la voz interior, esta esencia tiene que ver con la lealtad hacia los dem&aacute;s, la uni&oacute;n,&nbsp; integraci&oacute;n, empat&iacute;a y la totalidad.</p>
            <p><em>Frase: &ldquo;La uni&oacute;n hace la fuerza&hellip;&rdquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></p>
            <p><em>Pregunta: &iquest;Qu&eacute; necesitas para empezar a trabajar en tu objetivo?</em></p>
            <p>&nbsp;</p>
            <ol>
              <li><strong>Pilar Rojo </strong></li>
            </ol>
            <p>&nbsp;</p>
            <p>El pillar Rojo es s&iacute;mbolo de la vida, de la sangre, de respeto, se asocia con el coraz&oacute;n, la pasi&oacute;n y la vitalidad, suele asociarse a la acci&oacute;n, liderazgo, movimiento o cambio, es el color de la excitaci&oacute;n y la atracci&oacute;n sexual. D&oacute;nde indica peligro o prohibici&oacute;n.</p>
            <p><strong>El Pilar Rojo tambi&eacute;n se identifica con el Liderazgo y Respeto</strong></p>
            <p>&nbsp;El Liderazgo es otro de los pilares del Coaching para construir un sentido de comunidad, se requiere un gu&iacute;a, un modelo a seguir ese cambio en movimiento.</p>
            <p>El liderazgo se entiende como el hacer que otros hagan lo que se requiere hacer en bien personal o de una organizaci&oacute;n, porque est&aacute;n convencidos de manera segura que quieren hacerlo.</p>
            <p>El l&iacute;der est&aacute; al servicio de los dem&aacute;s, no al rev&eacute;s, y as&iacute; logra que las cosas sucedan.</p>
            <p>&nbsp;El liderazgo implica una gran responsabilidad &eacute;tica de empoderamiento, de rendici&oacute;n de cuentas, de servicio a otros con una&nbsp; visi&oacute;n de conjunto y bienestar.</p>
            <p>&nbsp;Frase: &ldquo;La competencia es buena nosotros somos mejores&hellip;&rdquo;</p>
            <p>Pregunta: &iquest;Cu&aacute;l es tu situaci&oacute;n actual?</p>
            <p>&nbsp;</p>
            <ol>
              <li><strong>Pilar Verde</strong></li>
            </ol>
            <p>&nbsp;</p>
            <p>El Pilar Verde&nbsp;es s&iacute;mbolo&nbsp;relajante y refrescante que induce a qui&eacute;n lo contempla sensaciones de serenidad y armon&iacute;a. Est&aacute; &iacute;ntimamente relacionado con todo lo natural, simbolizando tambi&eacute;n la vida, la fertilidad, la buena salud, la tolerancia, y responsabilidad. Proporciona una&nbsp;sensaci&oacute;n de&nbsp;tranquilidad de seguridad, de Inmadurez,&nbsp; de Juventud, de Esperanza y Renovaci&oacute;n total.</p>
            <p>El Pilar Verde es el color de la vida en general, de la naturaleza, de la ecolog&iacute;a, de la esperanza, del equilibrio, armon&iacute;a, paz, descanso, espera y naturalidad.</p>
            <p>&nbsp;</p>
            <p><strong>El Pilar Verde tambi&eacute;n se identifica con el Emprendimiento y la fertilidad</strong></p>
            <p>&nbsp;</p>
            <p>&nbsp;El emprendimiento es otro de los pilares del Coaching para que actuamos con valent&iacute;a, creatividad e iniciativa.</p>
            <p>Generamos un gran valor agregado a la iniciativa, al emprendimiento m&aacute;s all&aacute; de lo que el trabajo o el puesto indican o requieren.</p>
            <p>Tomamos acci&oacute;n y nos atrevemos a hacerlo sin miedo siempre con empat&iacute;a; es decir, con la convicci&oacute;n de realizarlo con la emoci&oacute;n, entrega y sentimiento. En el emprendimiento hay manifestaciones guerreras de fertilidad, tolerancia y responsabilidad, siempre miramos hacia adelante, nos movemos, nos adoptamos a todas las medidas que se presenten, conseguimos objetivos, afirmamos, no dudamos ni negamos, creamos, crecemos, convencemos siempre con armon&iacute;a.</p>
            <p>Frase: &ldquo;Nos atrevemos a ser mejores&hellip;&rdquo;</p>
            <p>Pregunta: &iquest;C&oacute;mo act&uacute;as ante los obst&aacute;culos?</p>
            <p>&nbsp;</p>
            <ol>
              <li><strong>Pilar Azul</strong></li>
            </ol>
            <p>El Pilar&nbsp; Azul&nbsp; es s&iacute;mbolo de Orden, es parte importante del esp&iacute;ritu, de la relajaci&oacute;n, del descanso de reflexi&oacute;n.</p>
            <p>Es el color de la fidelidad, de la confianza, de la sinceridad, de la amistad. Tambi&eacute;n&nbsp; es el color de la infancia y la ni&ntilde;ez, la tonalidad azul simboliza lo bello, lo elegante, lo aristocr&aacute;tico, lo reservado.</p>
            <p>Es el color del orden, la disciplina y la educaci&oacute;n. Tambi&eacute;n se relaciona con el silencio, soledad, aislamiento, seriedad, y la seguridad.</p>
            <p>&nbsp;</p>
            <p><strong>El Pilar Verde tambi&eacute;n se identifica con la Calidad y el Orden</strong></p>
            <p>&nbsp;</p>
            <p>&nbsp;La Calidad y el Orden es otro de los pilares del Coaching, el progreso es un producto de la uni&oacute;n, de la pasi&oacute;n y la creatividad.</p>
            <p>Una persona de calidad no es una persona mediocre, medianera, es simplemente de confianza, entrega y entusiasmo.</p>
            <p>La calidad es brillantez, luminosidad, y m&aacute;s que un indicador clave de rendimiento, es una actitud que no permite menos que la excelencia siempre con la satisfacci&oacute;n de ayudar a las necesidades de los dem&aacute;s con humildad y compasi&oacute;n.</p>
            <p>Frase: &ldquo;Convertimos lo bueno en excelente&hellip;&rdquo;</p>
            <p>Pregunta: &iquest;Qu&eacute; apoyo tienes a t&uacute; alrededor?</p>
            <ol>
              <li><strong>Pilar Violeta</strong></li>
            </ol>
            <p>El Pilar&nbsp; Violeta&nbsp; es s&iacute;mbolo del esp&iacute;ritu, de la relajaci&oacute;n, del descanso y de la reflexi&oacute;n. Tambi&eacute;n representa&nbsp;la mezcla de lo masculino con lo femenino (rojo y azul), y de la sensualidad con la espiritualidad...</p>
            <p>Por tener presencia de&nbsp;azul<strong>&nbsp;</strong>en su esencia, el&nbsp;Pilar violeta<strong>,&nbsp;</strong>cuando no resulta tan intenso, es f&aacute;cilmente asociado con la sensaci&oacute;n de nostalgia, tristeza,&nbsp;calma, serenidad y bienestar emocional<strong>.&nbsp;</strong>De la misma forma, se relaciona con el&nbsp;rojo<strong>&nbsp;</strong>al ser en sus tonalidades m&aacute;s brillantes, un color que se asocia con lo&nbsp;er&oacute;tico, lo sensual, la seducci&oacute;n, la penitencia y&nbsp; la humildad<strong>.&nbsp;</strong>Pero tambi&eacute;n, durante toda la historia, fue utilizado este pilar d&oacute;nde representaba&nbsp;poder y eternidad.</p>
            <p>&nbsp;</p>
            <p><strong>El Pilar Violeta tambi&eacute;n se identifica con la Trascendencia y espiritualidad</strong></p>
            <p>La Trascendencia y Espiritualidad es otro de los pilares del Coaching cuando la trascendencia o &ldquo;ir m&aacute;s all&aacute; &ldquo;se produce, la idea de calidad y trascendencia&nbsp; hacia el trabajo. Una vida plena no solo viene cuando hacemos lo que estamos llamado a hacer a trav&eacute;s de la espiritualidad y trascendencia&nbsp; sino cuando lo hacemos con y para los dem&aacute;s con solidaridad para lograr bienestar hacia los dem&aacute;s.</p>
            <p>Cuando nos basamos en lo personal empezamos a juzgar a otros tambi&eacute;n, qu&eacute; tan parecido eres a m&iacute;, nos separamos del mundo de la gran mente, desde el punto de vista filos&oacute;fico entramos en un mundo donde todos somos iguales, todos somos exactamente lo mismo, expresi&oacute;n de la mente teniendo una experiencia humana.</p>
            <p>&nbsp;</p>
            <p>Frase: &ldquo;Lo que hacemos da sentido a nuestras vidas&hellip;&rdquo;</p>
            <p>Preguntas: &iquest;C&oacute;mo te aseguras que llevas a cabo t&uacute; plan? &iquest;Cu&aacute;ndo vas a dar cada paso? &iquest;Qu&eacute; vas hacer hoy?</p>
          </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="map">
        <div class="container">
          <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-6 heading-section text-center ftco-animate">
              <h2>Nuestra Ubicaión</h2>
              <span class="subheading fas fa-location-arrow"></span><br>
            </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.189976754146!2d-99.00164178509377!3d19.40419598690046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e3252f2c148f%3A0x1f871df568f99d6a!2sLa%20Guerrillera%20223%2C%20Benito%20Ju%C3%A1rez%2C%2057000%20Nezahualc%C3%B3yotl%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1599862514588!5m2!1ses-419!2smx" width="1000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
         </div> 
      </div>
    </section>

@endsection
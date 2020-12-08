@extends('layouts.sitio')
@section('title','Publicaciones')
@section('content')
  <!-- Barra de navegacion NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light sticky-top" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/img/logo__horizontal.webp" height="73px;"></a>
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
  <section class="hero-wrap hero-wrap-2" style="background-image: url('site/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/publicaciones">Inicio <i class="ion-ios-arrow-forward"></i></a></span></p>
            <h1 class="mb-0 bread">Temas de Interés</h1>
          </div>
        </div>
      </div>
    </section>

   <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            @foreach($publicaciones as $p)
            <div class="story-wrap d-md-flex align-items-center">
              <div class="img" style="background-image: url(/headers/{{$p->cabecera}});"></div>
              <div class="text pl-md-5">
                <div class="heading-section">
                  <span class="subheading">{{ \Carbon\Carbon::parse($p->fecha)->format('d M, Y') }}</span>
                </div>                
                <h3>{{$p->titulo}}</h3>                
                <div class="heading-section">
                  <span class="subheading" style="color: #8fd0d2;">{{$p->subtitulo}}</span>
                </div>
                <p>{{$p->subtitulo}}</p>                
                <p><a href="/blog/{{$p->slug}}" class="btn btn-primary">Leer Más</a></p>
              </div>
            </div>
            @endforeach
            {!! $publicaciones->render() !!}
            <br>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form method="POST" action="/busqueda" class="searchform order-sm-start order-lg-last">
                  @csrf
                  @method('GET')
                <div class="form-group d-flex">
                  <input type="text" class="form-control pl-3" name="palabra" placeholder="Escriba una palabra y 'Enter'" style="font-size:100;" required="">
                  <button type="submit" class="form-control search"><span class="fa fa-search"></span></button>
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categorias</h3>
                @foreach($categorias as $c)
                  <li><a href="/categorias/{{$c->slu}}">{{$c->nombre}} <span class="ion-ios-arrow-forward"></span></a></li>
                @endforeach
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Entradas recientes</h3>
              @foreach($recientes as $p)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(/headers/{{$p->cabecera}});"></a>
                  <div class="text">
                    <h3 class="heading"><a href="/blog/{{$p->slug}}">{{$p->titulo}}</a></h3>
                    <div class="meta">
                      <div><a href="/blog/{{$p->slug}}"><span class="icon-calendar"></span> {{ \Carbon\Carbon::parse($p->fecha)->format('d M, Y') }}</a></div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Etiquetas</h3>
              <div class="tagcloud">
                @foreach($tags as $t)
                    <a href="/tag/{{$t->slug}}" class="tag-cloud-link">{{$t->name}}</a>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
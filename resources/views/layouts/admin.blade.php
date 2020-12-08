<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Organización Internacional De Coaching | @yield('title')</title>

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/adminlte.min.css">
  <script src="{{ asset('js/app.js') }}" defer></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" defer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" defer></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" defer></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
  <!-- Bootstrap Color Picker -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/forums" class="nav-link">Ir al foro</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
      <img src="img/logo__vertical.png" alt="OIC" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">OIC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/imgusers/{{Auth::user()->avatar}}"  class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }} {{Auth::user()->apellido}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          @if(Auth::user()->hasRole('admin'))
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/usuarios" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Usuarios</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-list-ul"></i>
              <p>
                Categorias
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/categoria" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de categorias</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-file-text"></i>
              <p>
                Publicaciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/posts" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de publicaciones</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Eventos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/evento" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de eventos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-comments-o"></i>
              <p>
                Foro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/catforo" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorias del foro</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-address-book"></i>
              <p>
                Contactos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/contactos" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personas en contacto</p>
                </a>
              </li>
            </ul>
          </li>
          @elseif(Auth::user()->hasRole('mod'))   
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Publicaciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/posts" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de publicaciones</p>
                </a>
              </li>
            </ul>
          </li>
          @elseif(Auth::user()->hasRole('user')) 
          <li class="nav-item">
              <a href="/forums" class="nav-link active">
                <i class="fa fa-comments-o" aria-hidden="true"></i>
                <p>Ir al foro</p>
              </a>
            </li> 
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Sesión activa:</h5>
      <h5>{{ Auth::user()->name }}</h5>
      <p>¿Desea cerrar sesión?</p>
      <ul class="nav nav-pills nav-sidebar flex-column">
        <li class="nav-item">
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
            <button class="btn btn-success">
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
              </form>
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <p>Cerrar sesión</p>
          </button>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>® No es el año en que lo programe, es el año en que lo sigues utilizando.</strong> Todos los derechos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset("adminlte/js/adminlte.min.js")}}"></script>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>
<script src="/js/sweetalert.min.js"></script>
@include('sweet::alert')
<script src="/js/adminlte.min.js"></script>
@yield('datatables')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.ckeditor.com/4.8.0/standard-all/ckeditor.js"></script>
@yield('script')
</body>
</html>
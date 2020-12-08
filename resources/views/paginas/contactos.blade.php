@extends('layouts.admin')
@section('title','Contactos')
@section('content')

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Contactos</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Contactos</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <br>
    <div class="table-responsive">
      <table class="table table-hover table-bordered" id="eventos">
        <thead class="thead-light">
          <tr>
            <th>Nombre</th>
            <th>Correo Electrónico</th>
            <th>Curso de Interés</th>
            <th>Dudad o Comentarios</th>
            <th>Fecha de Comentario</th>
          </tr>
        </thead>
        @foreach($con as $c)
        <tbody>
          <tr>                
            <th>{{$c->nombre}}</th>
            <td>{{$c->email}}</td>
            <td>{{$c->curso}}</td>
            <td>{{$c->dudas}}</td>
            <td>{{ \Carbon\Carbon::parse($c->created_up)->format('d M, Y') }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>

@endsection
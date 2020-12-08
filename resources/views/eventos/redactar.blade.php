@extends('layouts.admin')
@section('title','Redactar Evento')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Redactar Evento</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="/posts">Eventos</a></li>
          <li class="breadcrumb-item active">Redactar Evento</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="container mt-4 mb-4">
  <div class="card">
    <div class="card-body"> 
      <form action="/evento" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Título</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="titulo" placeholder="Título del evento" required="">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Fecha</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="fecha" placeholder="Título de la publicación" required="">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-12 col-form-label">Descripción</label>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <textarea class="ckeditor" name="desc" id="editor1" rows="10" cols="80" required="">
              Ingresa descripción del evento.
            </textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Imagen</label>
          <div class="col-sm-4">
            <input type="file" class="form-control" name="imagen" required="">
          </div>
        </div>
        <br>
        <div class="form-group row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Publicar</button>
          </div>
        </div>
      </form>
    </div> 
  </div>
</div>

@endsection
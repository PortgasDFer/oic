@extends('layouts.admin')
@section('title','Editar Evento')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Editar evento</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="/posts">Eventos</a></li>
          <li class="breadcrumb-item active">Editar evento</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="container mt-4 mb-4">
  <div class="card">
    <div class="card-body"> 
      <form action="/evento/{{$evento->slug}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Título</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="titulo" value="{{$evento->titulo}}" required="">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Fecha</label>
          <div class="col-sm-4">
            <input type="date" class="form-control" name="fecha" value="{{$evento->fecha}}" required="" value="<?php echo date("Y-m-d");?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-12 col-form-label">Descripción</label>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <textarea class="ckeditor" name="desc" id="editor1" rows="10" cols="80" value="" required="">
              {{$evento->descripcion}}
            </textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-12 col-form-label">Imagen actual</label>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <img src="/eventos/{{ $evento->imagen }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>
        <label for="" class="col-sm-4 col-form-label">Nueva Imagen (opcional)</label>
        <div class="col-sm-4">
          <input type="file" class="form-control" name="imagen">
        </div>
        <br>
        <div class="form-group row">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Actualizar</button>
          </div>
        </div>
      </form>
    </div> 
  </div>
</div>
@endsection

@section('script')
<script language="javascript">
    $(document).ready(function() {
    $('.js-example-basic-single').select2({
           width: 'resolve'
    });
});
</script>
<script language="javascript">
   function obtener_subcategorias(id_categoria) {
      $.get('/consultaSub/' + id_categoria, function (data) {
         $('#subcategoria').empty();
         $('#subcategoria').append('<option value="0" disable="true" selected="true">Seleccione una subcategoria</option>');
          $.each(data, function(fetch, Subcategoria){
            console.log(data);
            $('#subcategoria').append('<option value="'+ Subcategoria.id +'">'+ Subcategoria.nombresub +'</option>');
          })
      })
    }
</script>
@endsection
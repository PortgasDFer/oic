@extends('layouts.admin')
@section('title','Redactar Publicación')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Registrar categoria</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="/posts">Categorias del foro</a></li>
          <li class="breadcrumb-item active">Registrar categoria</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="container mt-4 mb-4">
  <div class="card">
    <div class="card-body"> 
      <form action="/catforo" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name" placeholder="Título de la publicación" required="">
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Color de la etiqueta</label>
          <div class="col-sm-10">
            <input type="text" class="form-control my-colorpicker1" name="color">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Confirmar</label>
          <div class="col-sm-10"><button type="submit" class="btn btn-block btn-info">Registrar</button></div>
        </div>
      </form>
    </div> 
  </div>
</div>
@endsection
@section('script')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
    <script>
        $('.my-colorpicker1').colorpicker();
    </script>
@endsection

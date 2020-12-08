@extends('layouts.admin')
@section('title','Categorias del foro')
@section('content')

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Categorias del foro</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active">Categorias del foro</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<div class="container-fluid">
  <div class="row">
      <a style="display:block" data-toggle="modal" data-target="#centralModalSm">
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Registrar</h3>

                <p>Nueva categoria del foro</p>
              </div>
              <div class="icon">
               <i class="fa fa-list-alt" aria-hidden="true"></i>
              </div>
              <a href="/catforo/create" class="small-box-footer">
                Click aquí <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </a>
  </div>
  <div class="table-responsive">
    <table class="table table-hover table-bordered" id="eventos">
      <thead class="thead-light">
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Slug</th>
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
    </table>
  </div>
</div>


@endsection
@section('datatables')
<script>
  $(document).ready( function () {
    $('#eventos').DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": false,
        "ajax": "/obtenerCatForo",
        "columns": [
            {data:'id'},
            {data:'name',},
            {data:'slug'},
            {data:'edit',orderable:false, searchable:false},
            {data:'delete',orderable:false, searchable:false}
        ],
        language: {
          "decimal": "",
          "emptyTable": "No hay información",
          "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
          "infoEmpty": "Mostrando 0 to 0 of 0 Documentos",
          "infoFiltered": "(Filtrado de _MAX_ total entradas)",
          "infoPostFix": "",
          "thousands": ",",
          "lengthMenu": "Mostrar _MENU_ Registros",
          "loadingRecords": "Cargando...",
          "processing": "Procesando...",
          "search": "Buscar:",
          "zeroRecords": "Sin resultados encontrados",
          "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
          }
        }
    });
  });
</script>
@endsection
@extends('layouts.admin')
@section('title','Categorias')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Categorias</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Categorias</li>
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

                  <p>Nueva Categoria</p>
                </div>
                <div class="icon">
                 <i class="fas fa-user-plus"></i>
                </div>
                <a data-toggle="modal" data-target="#centralModalSm" class="small-box-footer">
                  Click aquí <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
          </a>
    </div>
</div>

<div class="container-fluid mt-3">
	<div class="table-responsive">
	  <table class="table table-hover table-bordered" id="categorias">
	  	<thead class="thead-light">
	  		<tr>
	  			<th>Nombre</th>
	  			<th>Descripción</th>
          <th>Editar</th>
          <th>Eliminar</th>
	  		</tr>
	  	</thead>
	    
	  </table>
	</div>
</div>
<!--Modal Agregar -->
<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Agregar categoría</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form action="/categoria" method="POST">
      	@csrf
		    <div class="form-group row">
  		 	  <label for="" class="col-sm-2 col-form-label">Nombre</label>
  		 	  <div class="col-sm-10">
        		<input type="text" class="form-control" name="nombre" placeholder="Nombre de la categoría" required="">
        	</div>
  		  </div>
     	<div class="form-group row">
		 	<label for="" class="col-sm-2 col-form-label">Descripción</label>
		 	<div class="col-sm-10">
      			<input type="text" class="form-control" name="desc" placeholder="Agregue una breve descripción" required="">
      		</div>
		 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Cancelar</button>
        <button type="submit" class="btn btn-success btn-lg"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
      </div>
        </form>
    </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->
<!--/Modal Agregar-->
<!--Modal Editar-->
@foreach($cat as $c)
<div class="modal fade bs-example-modal-lg" id="PlaceModal-{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Editar categoría</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/categoria/{{$c->id}}" method="POST">
          @method('PUT')
          @csrf
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre" value="{{$c->nombre}}" required="">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Descripción</label>
              <div class="col-sm-10">
                    <input type="text" class="form-control" name="desc" value="{{$c->descripcion}}" required="">
                  </div>
             </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Cancelar</button>
              <button type="submit" class="btn btn-success btn-lg"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endforeach
<!--/Modal Editar-->
@endsection
@section('datatables')
<script>
  $(document).ready( function () {
    $('#categorias').DataTable({
        "processing": true,
        "serverSide": true,
        "autoWidth": false,
        "ajax": "/obtenerCategorias",
        "columns": [
            {data:'nombre'},
            {data:'descripcion'},
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
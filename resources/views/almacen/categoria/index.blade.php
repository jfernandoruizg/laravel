@extends ('Layout.admin')
@section ('contenido')
<!---->
<div class="row">

	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>LISTA DE CATEGORIAS <a href="categoria/create"><button class="btn btn-success">Nuevo</button></a></h3>
@include('almacen.categoria.search')
	</div>
</div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="table-responsive">
		
	<table class="table table-striped table-bordered table-condensed table-hover">
		

		<thead>
			
<th>ID</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>Opciones</th>

		</thead>
@foreach ($categoria as $cat)

<tr>
	<td>{{$cat->idcategoria}}</td>
	<td>{{$cat->nombre}}</td>
	<td>{{$cat->descripcion}}</td>
	<td><a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}"><button class="btn btn-info">Editar</button></a>
<a href=""><button class="btn btn-danger">Eliminar</button></a></td>
</tr>
@endforeach
	</table>	
	</div>
	<!--paginacion-->
{{$categoria->render()}}

</div>
</div>
@endsection

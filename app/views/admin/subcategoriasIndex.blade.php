@extends('layout')
@section('content')
	<?php echo csrf_token(); ?>
	<div class="table-responsive">
	<p>
		<a href="{{ route('subcategorias.create') }}" class="btn btn-info">Nueva Subcategoria</a>
	</p>

	{{Form::tablaResources($data['subcategorias'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
	</div>
	
	


@stop
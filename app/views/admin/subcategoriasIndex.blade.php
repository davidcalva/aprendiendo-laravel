@extends('layout')
@section('content')

	<div class="table-responsive">

	{{Form::tablaResources($data['subcategorias'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
	</div>
	
	


@stop
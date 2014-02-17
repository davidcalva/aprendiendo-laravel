@extends('layout')
@section('content')

	<div class="table-responsive">

	{{Form::tablaResources($data['categorias'],'categorias','table table-hover table-bordered',$data['columnas'],'categorias')}}
	</div>
	
	


@stop
@extends('layout')
@section('content')
	
	<div class="table-responsive">

	{{Form::tablaResources($data['pedidos'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
	</div>
	
	


@stop
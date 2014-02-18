@extends('layout')
@section('content')
	<?php echo csrf_token(); ?>
	<div class="table-responsive">

	{{Form::tablaResources($data['pedidos'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
	</div>
	
	


@stop
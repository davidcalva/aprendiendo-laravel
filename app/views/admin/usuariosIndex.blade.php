@extends('layout')
@section('content')
	{{'<pre>'}}
	<?php echo csrf_token(); ?>
	<div class="table-responsive">

	{{Form::tablaResources($data['usuarios'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
	</div>
	
	{{'</pre>'}}


@stop
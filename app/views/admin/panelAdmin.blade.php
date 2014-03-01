@extends('layout')
@section('content')
	{{'<pre>'}}
	<?php echo csrf_token(); ?>
	{{--Form::mylistUl($data,'secciones','classe')--}}
	@for ($i=0; $i < sizeof($data); $i++) 
		{{Form::mylink($data[$i],$data[$i],route($data[$i].'.index') )}}
	@endfor
	{{'</pre>'}}
	<div class="table-responsive">
		{{Form::tablaResources($pedidos,'pedidos','table table-hover table-bordered',$col,'pedidos')}}
	</div>

@stop

@stop
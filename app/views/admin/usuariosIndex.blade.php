@extends('layout')
@section('content')
	{{'<pre>'}}
	<div class="table-responsive">

	{{Form::tablaResources($data['usuarios'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
	</div>
	
	{{'</pre>'}}


@stop
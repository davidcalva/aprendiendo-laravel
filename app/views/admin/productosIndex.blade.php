@extends('layout')
@section('content')
	{{'<pre>'}}
	<?php echo csrf_token(); ?>
	<div class="table-responsive">
	<input id="_token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	{{Form::tablaResources($data['productos'],'productos','table table-hover table-bordered',$data['columnas'],'productos')}}
	</div>
	
	{{'</pre>'}}


@stop
@section('js')
{{ HTML::script('assets/js/scriptJS/scriptGeneral.js') }}
@stop
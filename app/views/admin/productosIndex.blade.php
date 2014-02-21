@extends('layout')
@section('content')
	
	<?php echo csrf_token(); ?>
	
	<div class="table-responsive">
	<p>
		<a href="{{ route('productos.create') }}" class="btn btn-info">Nueva Producto</a>
	</p>
	<input id="_token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	{{Form::tablaResources($data['productos'],'productos','table table-hover table-bordered',$data['columnas'],'productos')}}
	</div>
	
	


@stop
@section('js')
{{ HTML::script('assets/js/scriptJS/scriptGeneral.js') }}
@stop
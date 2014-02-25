@extends('layout')
@section('content')
	<?php echo csrf_token(); ?>
	<div class="table-responsive">
		<p>
			<a href="{{ route('pedidos.create') }}" class="btn btn-info">Nuevo pedido</a>
		</p>

		<input id="_token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		{{Form::tablaResources($data['pedidos'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
	</div>
	
@stop

@section('js')
{{ HTML::script('assets/js/scriptJS/scriptGeneral.js') }}
@stop
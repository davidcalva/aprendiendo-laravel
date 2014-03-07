@extends('layout')
@section('content')
	<div class="row fondoWhite">
		<div class="col-md-12">
			<?php echo csrf_token(); ?>
			<p><a href="{{ route('productos.create') }}" class="btn btn-info">Nuevo Producto</a></p>
			
		</div>
	</div>
	<div class="row fondoWhite">
		<div class="col-md-12">
			<div class="table-responsive">
				<input id="_token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				{{Form::tablaResources($data['productos'],'productos','table table-hover table-bordered',$data['columnas'],'productos')}}
			</div>
		</div>
	</div>


@stop
@section('js')
{{ HTML::script('assets/js/scriptJS/scriptGeneral.js') }}
@stop
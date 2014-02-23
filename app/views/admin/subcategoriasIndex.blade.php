@extends('layout')
@section('content')
	<?php echo csrf_token(); ?>
	<div class="table-responsive">
		<p>
			<a href="{{ route('subcategorias.create') }}" class="btn btn-info">Nueva Subcategoria</a>
		</p>
		<input id="_token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		{{Form::tablaResources($data['subcategorias'],'subcategorias','table table-hover table-bordered',$data['columnas'],'subcategorias')}}
	</div>
	
@stop
@section('js')
{{ HTML::script('assets/js/scriptJS/scriptGeneral.js') }}
@stop
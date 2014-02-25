@extends('layout')
@section('content')

	<?php echo csrf_token(); ?>
	<input id="_token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<div class="table-responsive">
		<p>
			<a href="{{ route('usuarios.create') }}" class="btn btn-info">Nueva Usuario</a>
		</p>

		{{Form::tablaResources($data['usuarios'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
	</div>
	
	


@stop
@section('js')
{{ HTML::script('assets/js/scriptJS/scriptGeneral.js') }}
@stop
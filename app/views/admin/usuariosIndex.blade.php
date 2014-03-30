@extends('admin.layoutAdmin')
@section('content')
	<div class="row fondoWhite">
		<div class="col-md-12">
			<?php echo csrf_token(); ?>
			<p><a href="{{ route('usuarios.create') }}" class="btn btn-info">Nueva Usuario</a></p>
		</div>
	</div>
	<div class="row fondoWhite">
		<div class="col-md-12">		
			<div class="table-responsive">
				<input id="_token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				{{Form::tablaResources($data['usuarios'],'usuarios','table table-hover table-bordered',$data['columnas'],'usuarios')}}
			</div>
		</div>
	</div>
	


@stop
@section('js')
{{ HTML::script('assets/js/scriptJS/scriptGeneral.js') }}
@stop
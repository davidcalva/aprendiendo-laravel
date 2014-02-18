@extends('layout')
@section('content')

	<div class="table-responsive">
	<?php echo csrf_token(); ?>
	<input id="_token" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	{{Form::tablaResources($data['categorias'],'categorias','table table-hover table-bordered',$data['columnas'],'categorias')}}
	</div>
	
	


@stop
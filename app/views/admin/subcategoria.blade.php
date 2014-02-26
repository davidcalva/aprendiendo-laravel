@extends('layout')
@section('content')
@section ('title') {{ $action }} subcategoria @stop
@section ('content')
<h1>{{ $action }} subcategoria</h1>

	<p>
		<a href="{{ route('subcategorias.index') }}" class="btn btn-info">Ir a subcategorias</a>
	</p>

	{{ Form::model($subcategoria, $form_data, array('role' => 'form')) }}
		<div class="row">
			<div class="form-group col-md-3">
				{{ Form::label('subcategoria', 'subcategoria') }}
				{{ Form::text('subcategoria', null, array('placeholder' => 'subcategoria', 'class' => 'form-control')) }}
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('descripcion', 'Descripcion') }}
				{{ Form::text('descripcion', null, array('placeholder' => 'Descripcion', 'class' => 'form-control')) }}     
			</div>
			<div class="form-group col-md-3">
				{{ Form::label('posicion', 'Posicion') }}
				{{ Form::text('posicion', null, array('placeholder' => 'No', 'class' => 'form-control')) }}     
			</div>
			<div class="form-group col-md-3">
				<?php
					$idCategoria = ( !empty($subcategoria->categoria_id) ) ?  $subcategoria->categoria_id : '';
				?>
				{{ Form::label('categoria', 'Categoria') }}
				{{ Form::myselect($categorias,$idCategoria,'categoria_id','categoria','id') }}     
			</div>
			<div class="form-group col-md-3">
				<?php  
					$mostrar = (!empty($subcategoria->mostrar)) ? $subcategoria->mostrar : '';
				?>
				{{ Form::label('posicion', 'Mostrar') }}
				{{-- Form::myselect($arr,$mostrar,'mostrar','valor','id') --}}
				<select name="mostrar" id="mostrar" class="form-control" >
					<option value=""  <?php if( $mostrar != '1' && $mostrar != '0' ) {echo 'selected="selected"';}?> ></option>
					<option value="1" <?php if( $mostrar == '1' ) {echo 'selected="selected"';}?> >Si</option>
					<option value="0" <?php if( $mostrar == '0' ) {echo 'selected="selected"';}?> >No</option>
				</select>
			</div>
		</div>
		{{ Form::button($action . ' subcategoria', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    

	{{ Form::close() }}
	@include ('errores', array('errores' => $errors ))

@stop
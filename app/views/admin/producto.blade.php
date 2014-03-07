@extends('layout')
@section('content')
@section ('title') {{ $action }} producto @stop
@section ('content')
	<div class="row fondoWhite">
		<div class="col-md-12">
			<h2>{{ $action }} producto</h2>

			<p><a href="{{ route('productos.index') }}" class="btn btn-info">Ir a productos</a></p>

			{{ Form::model($producto, $form_data, array('role' => 'form')) }}
				<div class="row">
					<div class="form-group col-md-3">
						{{ Form::label('producto', 'Producto') }}
						{{ Form::text('producto', null, array('placeholder' => 'Producto', 'class' => 'form-control')) }}
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('descripcion', 'Descripcion') }}
						{{ Form::text('descripcion', null, array('placeholder' => 'Descripcion', 'class' => 'form-control')) }}
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('marca', 'Marca') }}
						{{ Form::text('marca', null, array('placeholder' => 'Marca', 'class' => 'form-control')) }}
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('cantidad', 'Cantidad') }}
						{{ Form::text('cantidad', null, array('placeholder' => 'Cantidad', 'class' => 'form-control')) }}
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-3">
						{{ Form::label('precio', 'Precio') }}
						{{ Form::text('precio_inicial', null, array('placeholder' => 'Precio', 'class' => 'form-control')) }}
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('img', 'Imagen') }}
						{{ Form::text('img', null, array('placeholder' => 'Imagen', 'class' => 'form-control icon-images')) }}   
					</div>
					<div class="form-group col-md-3">
						<?php  
							$activo = (!empty($producto->activo)) ? $producto->activo : '';
							$idProveedor = ((!empty($producto->proveedor_id)) ? $producto->proveedor_id : ' ');
							$idSubcategiria = ((!empty($producto->subcategoria_id)) ? $producto->subcategoria_id : ' ');
						?>

						{{ Form::label('activo', 'Activo') }}
						{{--Form::myselect($arr,$activo,'activo','valor','id') --}}  
						{{$activo}}
						<select name="activo" id="activo" class="form-control" >
							<option value=""  <?php if( $activo == '' ) {echo 'selected="selected"';}?> ></option>
							<option value="1" <?php if( $activo == '1' ) {echo 'selected="selected"';}?> >Si</option>
							<option value="0" <?php if( $activo == '0' ) {echo 'selected="selected"';}?> >No</option>
						</select>
					</div>
					
					<div class="form-group col-md-3">
						{{ Form::label('subcategora', 'Subcategoria') }}
						{{ Form::myselect($subcategorias,$idSubcategiria,'subcategoria_id','subcategoria','id') }}  
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-3">
						{{ Form::label('proveedor', 'Proveedor') }}
						{{ Form::myselect($proveedores,$idProveedor,'proveedor_id','proveedor','id') }}  
					</div>
					
					
				</div>
				{{ Form::button($action . ' producto', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    

			{{ Form::close() }}
			@include ('errores', array('errores' => $errors ))
		</div>
	</div>
@stop
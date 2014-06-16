@extends ('layout')


@section ('title')
Registro de cliente
@stop
@section ('content')

	
<div class="panel panel-default">
	<?php  
	$nombre        = ($cliente) ? $cliente['nombres'] : '';
	$apellidos     = ($cliente) ? $cliente['apellidos'] : '';
	$email         = ($cliente) ? $cliente['email'] : '';
	$telefono      = ($cliente) ? $cliente['telefono'] : '';
	$password      = ($cliente) ? $cliente['password'] : '';
	$empresa       = ($cliente) ? $cliente['empresa'] : '';
	$rfc           = ($cliente) ? $cliente['rfc'] : '';
	$calleNum      = ($cliente) ? $cliente['calleNum'] : '';
	$colonia       = ($cliente) ? $cliente['colonia'] : '';
	$codigopostal  = ($cliente) ? $cliente['codigopostal'] : '';
	$ciudad        = ($cliente) ? $cliente['ciudad'] : '';
	$estado        = ($cliente) ? $cliente['estado'] : '';
	$pais          = ($cliente) ? $cliente['pais'] : '';
	?>
	{{ Form::model($cliente, $form_data, array('role' => 'form')) }}
		<div class="panel-heading">
			<div class="panel-title">
				<h2 >Registro </h2>
			</div>
		</div>
		<div id="paso2" class="panel-collapse collapse in">
			<div class="panel-body">
				<h4>Datos personales</h4>
				<div class="boxFix100p">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="nombre">Nombre*</label>
							<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{$nombre}}">
						</div>
						<div class="form-group">
							<label for="apellidos">Apellidos*</label>
							<input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" value="{{$apellidos}}">
						</div>

					</div>
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="email">Correo*</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="ejempl@email.com" value="{{$email}}">
						</div>
						<div class="form-group">
							<label for="telefono">Telefono*</label>
							<input type="text" class="form-control" name="telefono" id="telefono" placeholder="No. Telefonico" value="{{$telefono}}">
						</div>
					</div>
				</div>
				<div id="box_Password" class="boxFix100p ">
					<div class="col-md-6">
						<div class="form-group">
							<label for="password_registro">Password*</label>
							<input type="password" class="form-control" name="password_registro" id="password_registro" placeholder="*****" value="{{$password}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="password_registroConfirm">Repita el password*</label>
							<input type="password" class="form-control" name="password_registroConfirm" id="password_registroConfirm" placeholder="*****" value="{{$password}}">
						</div>
					</div>
				</div>
				<h4>Datos de la empresa</h4>
				<div class="col-md-6">
					<div class="form-group">
						<label for="empresa">Empresa</label>
						<input type="text" class="form-control" name="empresa" id="empresa" placeholder="Empresa" value="{{$empresa}}">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="rfc">RFC</label>
						<input type="text" class="form-control" name="rfc" id="rfc" placeholder="RFC" value="{{$rfc}}">
					</div>
				</div>

				<h4>Direccion</h4>
				<div class="col-md-6">
					
					<div class="form-group">
						<label for="calle">Calle y numero*</label>
						<input type="text" class="form-control" name="calle" id="calle" placeholder="Calle y No." value="{{$calleNum}}">
					</div>
					
					<div class="form-group">
						<label for="ciudad">Ciudad*</label>
						<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" value="{{$ciudad}}">
					</div>
					
					<div class="form-group">
						<label for="pais">Pais*</label>
						<input type="text" class="form-control" name="pais" id="pais" placeholder="Pais" value="{{$pais}}">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="colonia">Colonia*</label>
						<input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia" value="{{$colonia}}">
					</div>
					<div class="form-group">
						<label for="codigoPostal">Codigo Postal*</label>
						<input type="text" class="form-control" name="codigoPostal" id="codigoPostal" placeholder="Codigo Postal" value="{{$codigopostal}}">
					</div>
					<div class="form-group">
						<label for="estado">Provincia/Estado*</label>
						<input type="text" class="form-control" name="estado" id="estado" placeholder="Provincia/Estado" value="{{$estado}}">
					</div>
				</div>
				<input id="terminosCondiciones" type="checkbox" name="terminosCondiciones" value="1"><label for="terminosCondiciones">Acepto los terminos y condiciones.</label>
				<button id="openPaso3" type="submit" class="btn btn-default rigth" data-toggle="" data-target="#" data-parent="#accordion">
				Registrarme
				</button>
			</div>
		</div>
	{{ Form::close() }}
	
</div>

@stop
@extends ('layout')


@section ('title')
Servicios
@stop
@section ('content')

	
<div class="panel panel-default">
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
						<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
					</div>
					<div class="form-group">
						<label for="apellidos">Apellidos*</label>
						<input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos">
					</div>

				</div>
				<div class="col-md-6">
					
					<div class="form-group">
						<label for="email">Correo*</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="ejempl@email.com">
					</div>
					<div class="form-group">
						<label for="telefono">Telefono*</label>
						<input type="text" class="form-control" name="telefono" id="telefono" placeholder="No. Telefonico">
					</div>
				</div>
			</div>
			<div id="box_Password" class="boxFix100p ">
				<div class="col-md-6">
					<div class="form-group">
						<label for="password_registro">Password*</label>
						<input type="password" class="form-control" name="password_registro" id="password_registro" placeholder="*****">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="password_registroConfirm">Repita el password*</label>
						<input type="password" class="form-control" name="password_registroConfirm" id="password_registroConfirm" placeholder="*****">
					</div>
				</div>
			</div>
			<h4>Datos de la empresa</h4>
			<div class="col-md-6">
				<div class="form-group">
					<label for="empresa">Empresa</label>
					<input type="text" class="form-control" name="empresa" id="empresa" placeholder="Empresa">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="rfc">RFC</label>
					<input type="text" class="form-control" name="rfc" id="rfc" placeholder="RFC">
				</div>
			</div>

			<h4>Direccion</h4>
			<div class="col-md-6">
				
				<div class="form-group">
					<label for="calle">Calle y numero*</label>
					<input type="text" class="form-control" name="calle" id="calle" placeholder="Calle y No.">
				</div>
				
				<div class="form-group">
					<label for="ciudad">Ciudad*</label>
					<input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad">
				</div>
				
				<div class="form-group">
					<label for="pais">Pais*</label>
					<input type="text" class="form-control" name="pais" id="pais" placeholder="Pais">
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-group">
					<label for="colonia">Colonia*</label>
					<input type="text" class="form-control" name="colonia" id="colonia" placeholder="Colonia">
				</div>
				<div class="form-group">
					<label for="codigoPostal">Codigo Postal*</label>
					<input type="text" class="form-control" name="codigoPostal" id="codigoPostal" placeholder="Codigo Postal">
				</div>
				<div class="form-group">
					<label for="estado">Provincia/Estado*</label>
					<input type="text" class="form-control" name="estado" id="estado" placeholder="Provincia/Estado">
				</div>
			</div>
			<input id="terminosCondiciones" type="checkbox" name="terminosCondiciones" value="1"><label for="terminosCondiciones">Acepto los terminos y condiciones.</label>
			<button id="openPaso3" type="button" class="btn btn-default rigth" data-toggle="" data-target="#" data-parent="#accordion">
			Registrarme
			</button>
		</div>
	</div>
</div>

@stop
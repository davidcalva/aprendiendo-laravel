@extends('layout')


@section ('title')
Pagar
@stop
@section('content')
	<div class="row fondoWhite" >
		<form role="form">
			
		</form>
	</div>
	<div class="row">
		
	</div>
	<div class="row">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<h4>Paso 1: Opciones de pago  <a id="editPaso1" data-toggle="collapse" data-parent="#accordion" href="#paso1" class="rigth editParamsPago" style="visibility: hidden;">Modificar</a></h4>
					</h4>
				</div>
				<div id="paso1" class="panel-collapse collapse in">

					<div class="panel-body">
						<div class="col-md-6">
							<h4>Nuevo Cliente</h4>
							<p>Opciones de pago</p>
							<div><input id="registrarCuenta" type="radio" checked="checked" name="invitado"><label for="registrarCuenta">Registrar Cuenta</label></div>
							<div><input id="comprarInvitado" type="radio" name="invitado"><label for="registrarCuenta">Comprar como invitado</label></div>
							<p>Teniendo una cuenta las compras seran más rapidas, ademas de que tendra un historial de sus pedidos.</p>
							<button id="openPaso2" type="button" class="btn btn-default" data-toggle="collapse" data-target="#paso2" data-parent="#accordion">
							Continuar
							</button>
						</div>
						<div class="col-md-6">
							<h4>Cliente Registrado</h4>
							<div role="form">
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" placeholder="Password">
								</div>
								
								<button type="button" id="login" class="btn btn-primary">Entrar</button>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<h4>Paso 2: Detalles de facturacion  <a id="editPaso2" data-toggle="collapse" data-parent="#accordion" href="#paso2" class="rigth editParamsPago" style="visibility: hidden;">Modificar</a></h4>
					</h4>
				</div>
				<div id="paso2" class="panel-collapse collapse">
					<div class="panel-body">
						<h4>Datos personales</h4>
						<div class="boxFix100p">
							<div class="col-md-3">
								
								<div class="form-group">
									<label for="exampleInputEmail1">Nombre</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Apellidos</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputFile">Correo</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Telefono</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<h4>Datos de la empresa</h4>
							<div class="form-group">
								<label for="exampleInputEmail1">Empresa</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">RFC</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Telefono</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
						</div>
						<div class="col-md-4">
							<h4>Direccion</h4>
							<div class="form-group">
								<label for="exampleInputEmail1">Calle y numero*</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							
							<div class="form-group">
								<label for="exampleInputEmail1">Ciudad*</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							
							<div class="form-group">
								<label for="exampleInputFile">Pais*</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							
						</div>
						<div class="col-md-4">
							<h4>&nbsp;</h4>
							<div class="form-group">
								<label for="exampleInputEmail1">Colonia</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Codigo Postal*</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Provincia*</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
						</div>
						<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#collapseThree" data-parent="#accordion">
						Continuar
						</button>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
						Collapsible Group Item #3
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse">
					<div class="panel-body">
					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('css')
	{{ HTML::style('assets/css/styles/pay.css', array('media' => 'screen')) }}
@stop
@section('js')
{{ HTML::script('assets/js/scriptJS/scriptPay.js') }}
@stop
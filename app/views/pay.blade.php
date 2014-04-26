@extends('layout')


@section ('title')
Pagar
@stop
@section('content')
	
	<div class="row fondoWhite">
		<form role="form">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<h4>Paso 1: Opciones de pago  <a id="editPaso1" data-toggle="collapse" data-parent="#" href="#" class="rigth editParamsPago" style="visibility: hidden;">Modificar</a></h4>
							</h4>
						</div>
						<div id="paso1" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="col-md-6">
									<h4>Nuevo Cliente</h4>
									<p>Opciones de pago</p>
									<div><input id="registrarCuenta" type="radio" checked="checked" name="invitado"><label for="registrarCuenta">Registrar Cuenta</label></div>
									<div><input id="comprarInvitado" type="radio" name="invitado"><label for="comprarInvitado">Comprar como invitado</label></div>
									<p>Teniendo una cuenta las compras seran más rapidas, ademas de que tendra un historial de sus pedidos.</p>
									<button id="openPaso2" type="button" class="btn btn-default" data-toggle="collapse" data-target="#" data-parent="#">
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
								<h4>Paso 2: Detalles de facturacion  <a id="editPaso2" data-toggle="collapse" data-parent="#" href="#" class="rigth editParamsPago" style="visibility: hidden;">Modificar</a></h4>
							</h4>
						</div>
						<div id="paso2" class="panel-collapse collapse">
							<div class="panel-body">
								<h4>Datos personales</h4>
								<div class="boxFix100p">
									<div class="col-md-6">
										
										<div class="form-group">
											<label for="exampleInputEmail1">Nombre</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label for="exampleInputFile">Correo</label>
											<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
									</div>
									<div class="col-md-6">
										
										<div class="form-group">
											<label for="exampleInputPassword1">Apellidos</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Telefono</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
									</div>
								</div>

								<h4>Datos de la empresa</h4>
								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Empresa</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Empresa">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputPassword1">RFC</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="RFC">
									</div>
								</div>

								<h4>Direccion</h4>
								<div class="col-md-6">
									
									<div class="form-group">
										<label for="exampleInputEmail1">Calle y numero*</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Calle y No.">
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Ciudad*</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ciudad">
									</div>
									
									<div class="form-group">
										<label for="exampleInputFile">Pais*</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pais">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Colonia</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Colonia">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Codigo Postal*</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Codigo Postal">
									</div>
									<div class="form-group">
										<label for="exampleInputFile">Provincia/Estado*</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Provincia/Estado">
									</div>
								</div>
								<input id="direccion" type="checkbox" name="direccion"><label for="direccion">Usar estos datos para el envio</label>
								<button id="openPaso3" type="button" class="btn btn-default rigth" data-toggle="" data-target="#" data-parent="#accordion">
								Continuar
								</button>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<h4>Paso 3: Detalles de envio  <a id="editPaso3" data-toggle="collapse" data-parent="#" href="#" class="rigth editParamsPago" style="visibility: hidden;">Modificar</a></h4>
							</h4>
						</div>
						<div id="paso3" class="panel-collapse collapse">
							<div class="panel-body">
								<h4>Direccion</h4>
								<div class="col-md-6">
									
									<div class="form-group">
										<label for="exampleInputEmail1">Calle y numero*</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Calle y No.">
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Ciudad*</label>
										<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ciudad">
									</div>
									
									<div class="form-group">
										<label for="exampleInputFile">Pais*</label>
										<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Pais">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Colonia</label>
										<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Colonia">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Codigo Postal*</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Codigo Postal">
									</div>
									<div class="form-group">
										<label for="exampleInputFile">Provincia/Estado*</label>
										<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Provincia/Estado">
									</div>
								</div>
								<button id="openPaso4" type="button" class="btn btn-default rigth" data-toggle="collapse" data-target="#collapseThree" data-parent="#accordion">
								Continuar
								</button>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<h4>Paso 4: Forma de envio  <a id="editPaso4" data-toggle="collapse" data-parent="#" href="#" class="rigth editParamsPago" style="visibility: hidden;">Modificar</a></h4>
							</h4>
						</div>
						<div id="paso4" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12">
									<p>Por favor seleccione el metodo de envío de su preferencia.</p>
									<input id="estafeta" name="formaEnvio" type="radio" > <label for="estafeta">Estafeta</label><br>
									<input id="otro" name="formaEnvio" type="radio" > <label for="otro">Otro</label>
								</div>
								<div class="col-md-12">
									<p>Algún comentario sobre el envio.</p>
									<textarea id="comentarioEnvio" name="comentarioEnvio" class="form-control" rows="3"></textarea>
								</div>
								<button id="openPaso5" type="button" class="btn btn-default rigth" data-toggle="" data-target="#" data-parent="#accordion">
								Continuar
								</button>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<h4>Paso 5: Forma de pago  <a id="editPaso5" data-toggle="collapse" data-parent="#" href="#" class="rigth editParamsPago" style="visibility: hidden;">Modificar</a></h4>
							</h4>
						</div>
						<div id="paso5" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12">
									<p>Por favor seleccione la forma de pago que desee usar.</p>
									<input id="deposito" type="radio" name="formaPago"><label for="deposito">Deposito Bancario</label><br>
									<input id="transferencia" type="radio" name="formaPago"><label for="transferencia">Transferencia Bancaria</label>
								</div>
								<div class="col-md-12">
									<p>Algún comentario sobre su pedido.</p>
									<textarea id="comentarioPedido" name="comentarioPedido" class="form-control" rows="3"></textarea>
								</div>
								<button id="openPaso6" type="button" class="btn btn-default rigth" data-toggle="" data-target="#" data-parent="#accordion">
								Continuar
								</button>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<h4>Paso 6: Confirmar pedido  <a id="editPaso6" data-toggle="collapse" data-parent="#" href="#" class="rigth editParamsPago" style="visibility: hidden;">Modificar</a></h4>
							</h4>
						</div>
						<div id="paso6" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="col-md-12">
									<div class="table-responsive">
										<table id="cartTable" class="table table-bordered fondoWhite">
											<thead>
												<tr>
													<th></th>
													<th>Producto</th>
													<th>Precio Unitario</th>
													<th style="width: 10%;" colspan="">Cantidad</th>
													<th >Subtotal</th>
													
												</tr>
											</thead>
							    			<tbody id="confirmCarTbody">
							    			<?php $total = 0; ?>
							        		@if(!empty($cart))
						        				@foreach ($cart as $producto  )
						        					<tr >
						        						<td> <div style="width: 70px;"><img src="{{$producto['img']}}" alt="{{$producto['producto']}}" class="img-responsive"> </div></td>
						        						<td >{{$producto['producto']}}</td>
						        						<td >${{$producto['precio']}}</td>
						        						<td >
						        							<input type="hidden" value="{{$producto['id']}}" name="idUpdate">
															{{$producto['cantidad']}}
														</td>
						        						<td style="text-align: center;">${{$producto['precio']*$producto['cantidad']}}</td>
						        						
						        					</tr>
						        					<?php
						        					$total += ($producto['precio']*$producto['cantidad']);
						        					?>
						        				@endforeach
							        		@else
							        			<tr>
							        				<td colspan="4" >Vacio	</td>
							        			</tr>
							        		@endif
							        		</tbody>
							    		</table>
									</div>
									<div>
										<label for="">Intrucciones de trasferencia bancaria</label>
									</div>
									<a href="{{route('savePedido')}}" class="btn btn-default rigth">Confirmar Pedido</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@stop
@section('css')
	{{ HTML::style('assets/css/styles/pay.css', array('media' => 'screen')) }}
@stop
@section('js')
{{ HTML::script('assets/js/scriptJS/scriptPay.js') }}
@stop
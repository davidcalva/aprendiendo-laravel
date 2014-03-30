@extends('layout')


@section ('title')
Pagar
@stop
@section('content')
	<div class="row fondoWhite" >
		<form role="form">
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
				
				<button type="submit" class="btn btn-default">Submit</button>
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
				
				<button type="submit" class="btn btn-default">Submit</button>
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
		</form>
	</div>
@stop
@section('css')
	{{ HTML::style('assets/css/styles/pay.css', array('media' => 'screen')) }}
@stop
@section('js')
@stop
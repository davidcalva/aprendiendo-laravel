@extends('layout')
@section ('title')
Recuperar contraseña 
@stop 
@section('content')
	
		<div id="wrapLoginForm" >
			<h2>Recuperar contraseña</h2>
	    	<form id="log" class="form-horizontal" role="form" method="post" action="{{route('doLoginCliente')}}">
	    	
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-8">
						<input type="text" class="form-control required" id="email" name="email" placeholder="Correo Electrónico">
					</div>
				</div>
			
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button id="login" type="submit" class="btn btn-primary">Enviar Contraseña</button>
					</div>
				</div>
			</form>
		</div>
	
@stop
@section('css')
@stop
@section('js')
	{{HTML::script('assets/js/scriptJS/scriptLoginCliente.js')}}
@stop
@extends('layout')
@section('content')
	<div class="row fondoWhite" >
		<div id="wrapLoginForm" >
	    	<form id="log" class="form-horizontal" role="form" method="post" action="{{route('doLoginCliente')}}">
	    	<h3 class="text-center">Introduzca sus datos</h3>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-8">
						<input type="text" class="form-control required" id="email" name="email" placeholder="Correo Electrónico">
						{{$errors->first('email')}}
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-8">
						<input type="password" class="form-control required" id="password" name="password" placeholder="Contraseña">
						{{$errors->first('password')}}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button id="login" type="submit" class="btn btn-primary">Iniciar Sesión</button>
						<a id="register" href="{{route('registrarCliente')}}" class="btn btn-primary">Registrarme</a>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop
@section('css')
@stop
@section('js')
	{{HTML::script('assets/js/scriptJS/scriptLoginCliente.js')}}
@stop
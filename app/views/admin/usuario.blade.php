@extends('admin.layoutAdmin')
@section('content')
@section ('title') {{ $action }} usuario @stop
@section ('content')
	<div class="row fondoWhite">
		<div class="col-md-12">
			<h2>{{ $action }} usuario</h2>

			<p><a href="{{ route('usuarios.index') }}" class="btn btn-info">Ir a Usuarios</a></p>

			{{ Form::model($usuario, $form_data, array('role' => 'form')) }}
				<div class="row">
					<div class="form-group col-md-3">
						{{ Form::label('nombres', 'Nombres') }}
						{{ Form::text('nombres', null, array('placeholder' => 'Nombre', 'class' => 'form-control')) }}
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('apellidos', 'Apellidos') }}
						{{ Form::text('apellidos', null, array('placeholder' => 'Apellidos', 'class' => 'form-control')) }}     
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('email', 'Email') }}
						{{ Form::text('email', null, array('placeholder' => 'Email', 'class' => 'form-control')) }}     
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('telefono', 'Teléfono') }}
						{{ Form::text('telefono', null, array('placeholder' => 'Telefono', 'class' => 'form-control')) }}     
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('password', 'Contraseña') }}
						{{ Form::mypassword('password', 'form-control') }}     
					</div>
					<div class="form-group col-md-3">
						{{ Form::label('password_confirmation', 'Repita la Contraseña') }}
						{{ Form::mypassword('password_confirmation','form-control') }}     
					</div>
				</div>
				{{ Form::button($action . ' usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    

			{{ Form::close() }}
			@include ('errores', array('errores' => $errors ))
		</div>
	</div>

@stop
@extends('layout')
@section('content')
	{{ Form::open( array( 'class' => 'form-horizontal', 'role' => 'form','method'=>'post' ) ) }}
		<div class="form-group">
	    	{{--<input type="text" id="email" name="email" class="col-sm-2 control-label">--}}
	    	{{ Form::mylabel( 'E-Mail ', 'email', 'col-sm-2 control-label' ) }} {{ Form::email("email", $value = "", $attributes = array()) }} <br>
	    </div>
	    <div class="form-group">
	    	{{ Form::mylabel( 'Contraseña', 'password', 'col-sm-2 control-label') }} {{ Form::password('password') }} <br>
	    </div>
	    <div class="form-group">
	    	{{ Form::mylabel( 'Nombre', 'nombre', 'col-sm-2 control-label') }} {{ Form::text('nombre') }}
		</div>
		<div class="form-group">
			{{ Form::mybutton('Guardar','guardar',false,"btn btn-primary") }} 
			{{ Form::mylink('Regresar','regresar',route('users.index'),"btn btn-default") }}
		</div>
	{{ Form::close() }}
@stop
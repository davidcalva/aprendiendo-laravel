@extends ('layout')

{{--@section ('title') Saludos a {{ $name }} @stop --}}

@section ('content')

  	<h1>Hello </h1>
  	<p>Esta es la vista indes del controler index y la llama el metodo index(). </p>
  	<a href=" {{ route('users.create') }}" class="btn btn-primary">Nuevo usuario</a>
  	<p></p>
	{{HTML::script('js/scrollTo.js')}} 
  	<div class="table-responsive">
		<table id="id" class="table">
			<tr>
				<td>Nombre</td>
				<td>Correo</td>
				<td>Password</td>
				<td>Opciones</td>
			</tr>
			@foreach ($users as $user)
			<tr>
				<td>{{$user->full_name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->password}}</td>
				<td>
					<a href=" {{ route('users.edit', $user->id); }}" class="btn btn-primary">Editar</a>
					<button class="btn btn-danger">Eliminar</button>
		        </td>
			</tr>
			@endforeach
		</table>
	</div>
@stop
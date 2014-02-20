@extends('layout')
@section('content')
@section ('title') {{ $action }} pedido @stop
@section ('content')
<h1>{{ $action }} pedido</h1>

	<p>
		<a href="{{ route('pedidos.index') }}" class="btn btn-info">Ir a pedidos</a>
	</p>

	{{ Form::model($pedido, $form_data, array('role' => 'form')) }}
		<div class="row">
		
		</div>
		{{ Form::button($action . ' pedido', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    

	{{ Form::close() }}

@stop
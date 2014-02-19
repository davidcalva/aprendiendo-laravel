@extends('layout')
@section('content')


@section ('title') {{ $action }} Categoria @stop

@section ('content')

  <h1>{{ $action }}Categoria</h1>

  <p>
    <a href="{{ route('categorias.index') }}" class="btn btn-info">Lista de usuarios</a>
  </p>

{{ Form::model($categoria, $form_data, array('role' => 'form')) }}

 
  <div class="row">
    <div class="form-group col-md-4">
      {{ Form::label('categoria', 'Categoria') }}
      {{ Form::text('categoria', null, array('placeholder' => 'Introduce la categoria', 'class' => 'form-control')) }}
    </div>
    <div class="form-group col-md-4">
      {{ Form::label('descripcion', 'Descripcion') }}
      {{ Form::text('descripcion', null, array('placeholder' => 'Introduce tu nombre y apellido', 'class' => 'form-control')) }}        
    </div>
  </div>
  {{ Form::button($action . ' usuario', array('type' => 'submit', 'class' => 'btn btn-primary')) }}    
  
{{ Form::close() }}

@stop
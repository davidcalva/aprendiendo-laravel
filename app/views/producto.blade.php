@extends('layout')
@section('content')
	<div class="row fondoWhite" >
		<div class="col-md-4">
			<img src="{{route('index')}}/assets/img/productos/{{$producto->img}}" class="img-responsive" alt="Responsive image">
		</div>
		<div class="col-md-8 grisClaro" >
			<div class="">
				<h2>{{$producto->producto}}</h2>
				<h3>{{$producto->marca}}</h3>
				<h4>${{$producto->precio_inicial}}</h4>
				<?php 
					$clase = ($producto->cantidad > 0) ? 'bg-success': 'bg-danger'; 
					$disponible = ($producto->cantidad > 0) ? ' Inmediata': ' Sobre pedido'; 
				?>
				<p class="{{$clase}}">Disponibilidad :{{$disponible}} </p>
				<form class="form-inline" role="form">
					<label for="cantidadProducto" class="">Cantidad </label>
					<div class="form-group">
						
						<input id="cantidadProducto" type="text" name="cantidadProducto" value="1" class="form-control">

					</div>
						<button type="button" class="btn btn-primary">Al Carrito</button>
					
				</form>
				<h3>Descripcion</h3>
				<p>{{$producto->descripcion}}</p>
				
				<pre> <?php #print_r($producto); ?></pre>
			</div>
		</div>
		
	</div>	
@stop
@section('css')
	{{ HTML::style('assets/css/styles/pay.css', array('media' => 'screen')) }}
@stop
@section('js')
@stop
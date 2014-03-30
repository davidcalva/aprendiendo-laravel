@extends('layout')

@section ('title')
Confirmar productos
@stop

@section('content')
	<div class="row fondoWhite" >
		<div class="col-md-10 col-md-offset-1" >
			<div class="table-responsive">
				<table id="cartTable" class="table table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>Producto</th>
							<th>Precio Unitario</th>
							<th style="width: 10%;" colspan="">Cantidad</th>
							<th colspan="2">Subtotal</th>
							
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
									<input type="text" class="form-control" name="cantUpdade" value="{{$producto['cantidad']}}"><i class="icon-spinner blockIcon" ></i>
								</td>
        						<td style="text-align: center;">${{$producto['precio']*$producto['cantidad']}}</td>
        						<td><i class="icon-close removeProducto" ><input type="hidden" value="{{$producto['id']}}" name="id"></i></td>
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
			<div class="row">
  				<div class="pull-right col-md-4 text-right">
  					<h4 style="display: inline-block;">Total :</h4><h4 id="total" style="display: inline-block;">${{$total}}</h4>
  					<a href="{{route('pay')}}" type="button" class="btn btn-primary">Pagar</a href="{{route('pay')}}">
  				</div>
			</div>
		</div>
	</div>	
@stop
@section('css')
	{{ HTML::style('assets/css/styles/pay.css', array('media' => 'screen')) }}
@stop
@section('js')
@stop
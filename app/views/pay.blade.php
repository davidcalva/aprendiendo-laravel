@extends('layout')
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
							<th>Total</th>
						</tr>
					</thead>
	    			<tbody id="confirmCarTbody">
	        		@if(!empty($cart))
        				@foreach ($cart as $producto  )
        					<tr >
        						<td> <div style="width: 70px;"><img src="{{$producto['img']}}" alt="{{$producto['producto']}}" class="img-responsive"> </div></td>
        						<td >{{$producto['producto']}}</td>
        						<td >{{$producto['precio']}}</td>
        						<td >
        							<input type="hidden" value="{{$producto['id']}}" name="idUpdate">
									<input type="text" class="form-control" name="cantUpdade" value="{{$producto['cantidad']}}"><i class="icon-spinner blockIcon" ></i>
								</td>
        						<td style="text-align: center;"><i class="icon-close removeProducto" ><input type="hidden" value="{{$producto['id']}}" name="id"></i></td>
        					</tr>
        				@endforeach
	        		@else
	        			<tr>
	        				<td colspan="4" >Vacio	</td>
	        			</tr>
	        		@endif
	        		</tbody>
	    		</table>
			</div>
		</div>
	</div>	
@stop
@section('css')
	{{ HTML::style('assets/css/styles/pay.css', array('media' => 'screen')) }}
@stop
@section('js')
@stop
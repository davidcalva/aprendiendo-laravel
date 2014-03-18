@extends('layout')
@section('content')
	<div class="row fondoWhite" >
		<div class="col-md-10 col-md-offset-1" style="background-color: blue;height: 200px ">
			<div class="table-responsive">
				<table id="cartTable" class="table table-bordered">
	    			<tbody id="cartTableBody">
	        		@if(!empty($cart))
	        			
	        				@foreach ($cart as $producto  )
	        					<tr>
	        						<td> <div style="width: 70px;"><img src="{{$producto['img']}}" alt="{{$producto['producto']}}" class="img-responsive"> </div></td>
	        						<td>{{$producto['producto']}}</td>
	        						<td>{{$producto['precio']}}</td>
	        						<td><input type="text" value="{{$producto['cantidad']}}" name="cantidad"><i class="icon-spinner"></i></td>
	        						<td><i class="icon-close removeProducto"><input type="hidden" value="{{$producto['id']}}" name="id"></i></td>
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
@extends('layout')
@section('content')
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group" id="categorias">
			@for ($i=0; $i < sizeof($categorias); $i++) 
				<li id="{{$categorias[$i]['id']}}" class="list-group-item">
					{{$categorias[$i]['categoria']}}<input value="{{$categorias[$i]['id']}}" type="checkbox" name="categorias[]" style="float:right;">
				</li>
			@endfor
			</ul>
		</div>
		<div class="col-md-9" id="results">
			
				
				
		</div>
	</div>	
@stop
@section('js')
	{{HTML::script('assets/js/scriptJS/scriptCatalogo.js')}}
@stop
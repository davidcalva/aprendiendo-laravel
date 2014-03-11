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
		<div class="col-md-9" >
			<div class="row">
				{{ Form::label('mostrar', 'Articulos por pagina') }}
				{{ Form::select( 'mostrar', array('10'=>'10','15'=>'15','20'=>'20') 	) }}
				{{ Form::label('subcategoria', 'Subcategoria') }}
				<select name="subcategoria" id="subcategoria"></select>
			</div>
			<div id="results" class="row">
			</div>
			<div class="row">
				<ul id="paginacion" class="pagination">
	  				<li class="disabled"><span>&laquo;</span></li>
	  				<li><a href="#">&raquo;</a></li>
	  			</ul>
			</div>
		</div>
	</div>	
@stop
@section('js')
	{{HTML::script('assets/js/scriptJS/scriptCatalogo.js')}}
@stop
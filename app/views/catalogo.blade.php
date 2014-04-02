@extends('layout')
@section('content')
	<div class="row fondoWhite" >
		<div class="col-md-3">
			<ul class="list-group" id="categorias">
			@for ($i=0; $i < sizeof($categorias); $i++) 
				<li id="{{$categorias[$i]['id']}}" class="list-group-item">
					{{$categorias[$i]['categoria']}}<input value="{{$categorias[$i]['id']}}" type="checkbox" name="categorias[]" style="float:right;">
				</li>
			@endfor
			</ul>
		</div>
		<div class="col-md-9 fondoCat" >
			<div class="row" style="margin-bottom:10px;">
				<div class="col-md-9 texto" style="margin-top:10px;" >
					{{ Form::label('mostrar', 'Articulos por pagina') }}
					{{ Form::select( 'mostrar', array('10'=>'10','15'=>'15','20'=>'20') 	) }}
					{{ Form::label('subcategoria', 'Subcategoria') }}
					<select name="subcategoria" id="subcategoria"></select>
				</div>
			</div>
			<div id="results" class="row">
			</div>
			<div class="col md-4">
				<ul id="paginacion" class="pagination">
	  				<li id="before" class="disabled"><span>&laquo;</span></li>
	  				<li id="next"><a href="#">&raquo;</a></li>
	  			</ul>
			</div>
		</div>
	</div>	
@stop
@section('css')
	{{ HTML::style('assets/css/styles/catalogo.css', array('media' => 'screen')) }}
@stop
@section('js')
	{{HTML::script('assets/js/scriptJS/scriptCatalogo.js')}}
@stop
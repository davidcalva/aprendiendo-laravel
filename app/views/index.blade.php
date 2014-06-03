@extends ('layout')

{{--@section ('title') Saludos a {{ $name }} @stop --}}

@section ('content')

<!--  Carousel - consult the Twitter Bootstrap docs at 
http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div class="row fondoWhite">
	<div class="col-md-12 " style="padding-left: 0;padding-right: 0; ">
		<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
			<div class="col-md-1  socialnet">
								<div class="fb-like" data-href="https://www.facebook.com/SielCancun" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>				
			</div>
				
			<ol class="carousel-indicators">
				<li data-target="#this-carousel-id" data-slide-to="0" class="active"></li>
				<li data-target="#this-carousel-id" data-slide-to="1" ></li>
				<li data-target="#this-carousel-id" data-slide-to="2" ></li>
				<li data-target="#this-carousel-id" data-slide-to="3" ></li>

			</ol>

		<div class="carousel-inner">
        <div class="active item">
        	<img src="assets/img/slide3.png" alt="banner1" />
        	
        </div>
	        <div class="item"><img src="assets/img/slide3.png" alt="banner2" /></div>
	        <div class="item"><img src="assets/img/slide3.png" alt="banner3" /></div>
	        <div class="item"><img src="assets/img/slide3.png" alt="banner4" /></div>
      </div><!-- /.carousel-inner -->
			<!--  Next and Previous controls below
			href values must reference the id for this carousel -->
			<a class="carousel-control left" href="#this-carousel-id" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="carousel-control right" href="#this-carousel-id" data-slide="next"><span class="icon-next"></span></a>
		</div><!-- /.carousel -->
	</div>
</div>
<div class="row fondoWhite">
	<div class="col-md-12"  style="color:#0D3767;">
		<h2>Bienvenido a Grupo Siel</h2>
		<div class="fb-like" data-href="https://www.facebook.com/SielCancun" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
		<p class="text-left" style="color:#131304;">
		Grupo Siel comenzó en 1988. Además de distribuir marcas lideres en el mercado, prestamos servicios
		de asesoría, creación de proyectos y soluciones para cualquier sector, ya sea hábitat, comercial o industrial.
		No dude en contactarnos, le cotizamos cualquier presupuesto de manera inmediata y sin compromiso alguno.
		</p>
	</div>  
</div>

<div class="row fondoWhite" style="position: relative;">
	<div id="next" class="next"><i class="icon-arrow-right"></i></div>
	<div id="before" class="before"><i class="icon-arrow-left"></i></div>
	<div class="col-md-12 " >
		<h3>Lo Nuevo</h3>
		<div class="carrusel-wrap" style="overflow:hidden;">
			<div id="carrusel">
			
			@foreach ($productos as $producto)
				<div class="carrusel-box">
					<div class="thumbnail noMargin ">
						<a href="{{route('index')}}/producto/{{$producto->id}}" class="">
							<img class="img-responsive" style="max-width:158px; height:84px;" src="assets/img/productos/{{$producto->img}}" alt="{{$producto->producto}}">
						</a>
						<div class="caption carrusel-white-space">
							<div style="height:35px">
								<h5 class="nombre">{{$producto->producto}}</h5>
							</div>
							<div class="">
								<span class="text-right precio"> ${{$producto->precio_inicial}}</span><br>
								<a class="btn btn-primary btn-sm addCart" href="{{$producto->id}}" name="{{$producto->producto}}" >Agregar al carrito</a>
								
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>



@stop

@section('js')
<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
    });
  });
</script>
@stop
@section('css')
{{ HTML::style('assets/css/styles/carrusel.css', array('media' => 'screen')) }}
@stop 
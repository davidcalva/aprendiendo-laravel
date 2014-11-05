@extends ('layout')

{{--@section ('title') Saludos a {{ $name }} @stop --}}

@section ('content')

<!--  Carousel - consult the Twitter Bootstrap docs at 
http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div class="row fondoWhite">
	<div class="col-md-12 " style="padding-left: 0;padding-right: 0; ">
		<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
			
				
			<ol class="carousel-indicators">
				<li data-target="#this-carousel-id" data-slide-to="0" class="active"></li>
				<li data-target="#this-carousel-id" data-slide-to="1" ></li>
				<li data-target="#this-carousel-id" data-slide-to="2" ></li>
				<li data-target="#this-carousel-id" data-slide-to="3" ></li>

			</ol>

		<div class="carousel-inner">
        <div class="active item">
        	<img src="assets/img/slidebombas.png" alt="Equipos de bombeo" />
        	<div class="container">
		        	<div class="carousel-caption">
		        		<h2 class="mensaje">Equipos de bombeo</h2>
		        		<p class="lead quitar">
	  						Tenemos bombas con la más alta calidad, ofrecemos soporte técnico y servicio posventa eficaz, asegurando que su equipo cuente con respaldo por años.
						</p>
		        	</div>
	        	</div>
        	
        </div>
	        <div class="item"><img src="assets/img/piscinaslider.png" alt="Equipos para albercas" />
	        	<div class="container">
		        	<div class="carousel-caption quitar">
		        		<h2 class="mensaje">Todo para su alberca</h2>
		        		<p class="lead quitar">
  							 Filtros, bombas, iluminación, calentadores, equipos de hidromasaje, fuentes y equipo de mantenimiento y limpieza
						</p>
		        	</div>
	        	</div>
	        </div>
	        <div class="item"><img src="assets/img/piscinaslider.png" alt="banner3" />

	        	<div class="container">
		        	<div class="carousel-caption">
		        		<h2 class="mensaje">Todo para su alberca</h2>
		        		<p class="lead quitar">
  						 	Filtros, bombas, iluminación, calentadores, equipos de hidromasaje, fuentes y equipo de mantenimiento y limpieza
						</p>
		        	</div>
	        	</div>
	        </div>
	        <div class="item"><img src="assets/img/flojet.png" alt="banner4" />
	        		<div class="container">
		        	<div class="carousel-caption">
		        		<h2 class="mensaje">Dispensador de agua embotellada</h2>
		        		<p class="lead quitar">
  							Para aplicaciones domésticas y comerciales
						</p>
		        	</div>
	        	</div>


	        </div>
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
	<div class="col-md-12">
		<div class="col-md-7"  style="color:#787878;  padding:5px;">
			<h2>Bienvenido a Grupo Siel</h2>
			
			<p class="text-left" style=" text-align:justify;">
			Grupo Siel comenzó en 1988. Además de distribuir marcas lideres en el mercado, prestamos servicios
			de asesoría, creación de proyectos y soluciones para cualquier sector, ya sea hábitat, comercial o industrial.
			No dude en contactarnos, le cotizamos cualquier presupuesto de manera inmediata y sin compromiso alguno.
			<p><a  href="{{route('contacto')}}" class="btn btn-info">Contáctenos...</a></p>
			</p>
		</div>  
		<div class="col-md-5"  style="color:#0D3767;" >
			<h2>Video Corporativo</h2>
				
				<video  class="img-responsive" controls>
					<source src="assets/img/gruposiel.mp4" type="video/mp4">
				</video>
		</div>
	</div>
</div>

<div class="row fondoWhite" style="position: relative;">
	<div id="next" class="next"><span class="glyphicon glyphicon-chevron-right flecha"></div>
	<div id="before" class="before"><span class="glyphicon glyphicon-chevron-left flecha"></span></div>
	
	<div class="col-md-12 " >
		<h3>Productos</h3>
		<div class="carrusel-wrap" style="overflow:hidden;">
			<div id="carrusel">
			
			@foreach ($productos as $producto)
				<div class="carrusel-box" >
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
								<a class="btn btn-primary btn-sm addCart" href="{{$producto->id}}" name="{{$producto->producto}}" >Agregar al Carrito</a>
								
							</div>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
</div>

<div class="row fondoWhite">
	
		<div class="col-md-12">
			<h3>Contamos con las Mejores Marcas</h3>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.soler-palau.mx/"target="_blank">
					<img class="img-responsive"  src="assets/img/soler.jpg" alt="Soler&Palau">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.impel.com.mx/"target="_blank">
					<img class="img-responsive"  src="assets/img/impel.jpg" alt="Impel de México">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.barnes.com.mx/"target="_blank">
					<img class="img-responsive"  src="assets/img/barmesa.jpg" alt="Barmesa">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.flojet.mx/" target="_blank">
					<img class="img-responsive"  src="assets/img/flojet-logo.png" alt="Flojet">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://mx.grundfos.com/" target="_blank">
					<img class="img-responsive"  src="assets/img/grundfos-logo.png" alt="Grundfos">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://novemweb.com/" target="_blank">
					<img class="img-responsive"  src="assets/img/novem.png" alt="Grupo Novem">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.gpa.com.mx/" target="_blank">
					<img class="img-responsive"  src="assets/img/gpa.png" alt="GPA Albercas">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.xyleminc.com/en-us/Pages/default.aspx" target="_blank">
					<img class="img-responsive"  src="assets/img/xylem.png" alt="Xylem">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.astralpool.com/" target="_blank">
					<img class="img-responsive"  src="assets/img/astralpool.jpg" alt="Astral Pool">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.pentair.com/" target="_blank">
					<img class="img-responsive"  src="assets/img/pentair.png" alt="PentAir">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://www.armstrong-mexico.mx/" target="_blank">
					<img class="img-responsive"  src="assets/img/amstrong.jpg" alt="Amstrong">
				</a>
			</div>
			<div class="col-md-1 col-xs-3">
				<a href="http://bellgossett.com/" target="_blank">
					<img class="img-responsive"  src="assets/img/bellgosett.gif" alt="Bell & Gosett">
				</a>
			</div>
	</div>
	

</div>
<div class="row fondoWhite">
		<div class="col-md-12">
			<div class="col-md-1 col-xs-3">
					<a href="http://www.warson.com/" target="_blank">
						<img class="img-responsive"  src="assets/img/warson.jpg" alt="Bombas Warson">
					</a>
			</div>
			<div class="col-md-1 col-xs-3">
					<a href="http://www.franklin-electric.com/corporate/default.aspx" target="_blank">
						<img class="img-responsive"  src="assets/img/franklin.png" alt="Franklin Electric">
					</a>
			</div>
		</div>
	</div>
<br>
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
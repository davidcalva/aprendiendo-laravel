@extends ('layout')

{{--@section ('title') Saludos a {{ $name }} @stop --}}

@section ('content')

<!--  Carousel - consult the Twitter Bootstrap docs at 
http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div class="row fondoWhite">
	<div class="col-md-12" style="padding-left: 0;padding-right: 0;">
		<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
			
				
			<ol class="carousel-indicators">
				<li data-target="#this-carousel-id" data-slide-to="0" class="active"></li>
				<li data-target="#this-carousel-id" data-slide-to="1" ></li>
				<li data-target="#this-carousel-id" data-slide-to="2" ></li>
				<li data-target="#this-carousel-id" data-slide-to="3" ></li>
				<li data-target="#this-carousel-id" data-slide-to="4" ></li>

			</ol>

		 <div class="carousel-inner">
	        <div class="active item">
	        	<img src="assets/img/slidebombas.png" alt="Equipos de bombeo" />
	        	<div class="container">
			        	<div class="carousel-caption quitar">
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
	        <div class="item"><img src="assets/img/contacto.png" alt="Contacto" />

	        	<div class="container">
		        	<div class="carousel-caption ">
		        		<h2 class="mensaje quitar">Comentarios</h2>
		        		<p class="lead quitar">
  						 	Contactenos y nos comunicaremos con usted lo más pronto posible. 
						</p>
							
  						 <a href="{{route('index')}}/contacto" class="btn btn-link"><span class="glyphicon glyphicon-plus"></span> más información</a>

		        	</div>
	        	</div>
	        </div>
	        <div class="item"><img src="assets/img/flojet.png" alt="Dispensador de agua Flojet" />
	        		<div class="container">
		        	<div class="carousel-caption">
		        		<h2 class="mensaje quitar">Dispensador de agua embotellada</h2>
		        		<p class="lead quitar">
  							Para aplicaciones domésticas y comerciales 
						</p>
						<a href="{{route('index')}}/producto/39}" class="btn btn-link"> <span class="glyphicon glyphicon-plus"></span> Más detalles</a>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KB5X4BKEY9AH2">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

		        	</div>

	        		</div>


	        </div>
	        <div class="item"> <img src="assets/img/catalogo.png" alt="catálogo" >
	        	<div class="container">
	        		<div class="carousel-caption">
	        				<h2 class="mensaje quitar">Visita nuestro catálogo</h2>
	        				<p class="lead quitar">
	        					Visita nuestro catálogo online 	
	        				</p>
	        				<a href="{{route('catalogo')}}"><span class="glyphicon glyphicon-plus"></span> Más detalles</a>
	        		</div>
	        	</div>

	        </div>
     	 </div><!-- /.carousel-inner -->
			<!--  Next and Previous controls below
			href values must reference the id for this carousel -->
			<a class="carousel-control left" href="#this-carousel-id" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="carousel-control right" href="#this-carousel-id" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</div><!-- /.carousel -->

	</div>

</div>
<div class="row fondoWhite">
	<div class="col-md-12">
		<div class="col-md-8"  style="color:#787878; padding:5px;">
			<div class="col-md-12">
				<h2>Bienvenido a Grupo Siel</h2>
				
				<p class="text-left" style=" text-align:justify;">
				

		 	Grupo Siel nace en 1988 con el propósito de comercializar y dar soluciones en materia de ventilación y bombeo al sector industrial, comercial y de vivienda.
		 </p>
		</p>
			A través de estos años de experiencia nos hemos posicionado como una empresa que mantiene la capacidad para dar respuesta de manera integral a las necesidades de nuestros clientes, ya que somos una empresa que además de distribuir marcas líderes en el mercado en equipos de ventilación y bombeo, prestamos servicios de asesoría y proyectos para cualquier tipo de sector, ya sea hábitat, comercial o industrial.

		 </p>

				<p><a  href="{{route('historia')}}" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Más información</a></p>  
			
			</div>
			<div class="col-md-12">
				<h3>Nuestras líneas</h3>
			
					<div class="col-xs-6 col-md-3 image">
						<a href="{{route('catalogo')}}" class="thumbnail nomargen">
		        		 	<img class="img-responsive" src="assets/img/ventilacion2.png"
		         			alt="Equipos de ventilación">
		         			<h5 class="text-center"><span class="glyphicon glyphicon-plus"></span> Ver más</h5>

	      				</a>	

					</div>
				
					<div class="col-xs-6 col-md-3 image"> 
						<a href="{{route('catalogo')}}" class="thumbnail nomargen">
		        		 	<img class="img-responsive" src="assets/img/bombeo.png"
		         			alt="Equipos de bombeo">
		         			<h5 class="text-center"><span class="glyphicon glyphicon-plus"></span> Ver más</h5>

	      				</a>	
					</div>
					
					<div class="col-xs-6 col-md-3 image"> 
						<a href="{{route('catalogo')}}" class="thumbnail nomargen">
		        		 	<img class="img-responsive" src="assets/img/alberca.png"
		         			alt="Equipos para albercas">
		         			<h5 class="text-center"><span class="glyphicon glyphicon-plus"></span> Ver más</h5>

	      				</a>	
					</div>
					<div class="col-xs-6 col-md-3 image"> 
					
	      				<a href="{{route('catalogo')}}" class="thumbnail nomargen">
		        		 	<img src="assets/img/vertodo.png"
		         			alt="Ver nuestro catálogo">
		         			<h5 class="text-center"><span class="glyphicon glyphicon-plus"></span> Ver más</h5>

	      				</a>	
					</div>
			</div>
		</div>  
		<div class="col-md-4"  style="color:#0D3767;" >
			<h2>Video Corporativo</h2>
				
				<video  class="img-responsive" controls>
					<source src="assets/img/gruposiel.mp4" type="video/mp4"></source>
				</video>
		</div>
	</div>
</div>

<div class="row fondoWhite" style="position:relative;">
	<div id="next" class="next"><span class="flecha"><img src="assets/img/next.ico"></span></div>
	<div id="before" class="before"><span class="flecha"> <img src="assets/img/prev.ico"></span></div>
	
	<div class="col-md-12" >
		<h3>Productos</h3>
		<div class="carrusel-wrap" style="overflow:hidden;">
			<div id="carrusel">
			
			@foreach ($productos as $producto)
				<div class="carrusel-box"  >
					<div class="thumbnail thumbnailprod noMargin">
						<a href="{{route('index')}}/producto/{{$producto->id}}" class="">
							<img class="img-responsive" style="max-width:130px; height:84px;" src="assets/img/productos/{{$producto->img}}" alt="{{$producto->producto}}">
						</a>
						<div class="caption carrusel-white-space">
							<div style="height:35px">
								<h5 class="nombre">{{$producto->producto}}</h5>
							</div>
							<div class="">
								
									@if($producto->activo == 1)
										<span class="text-right precio"> ${{$producto->precio_inicial}}</span>
										<a class="btn btn-primary btn-sm addCart" href="{{$producto->id}}" name="{{$producto->producto}}" >Agregar al Carrito</a>
								
									@elseif ($producto->activo==3) 
										
										<span class="text-right precio">Solo en Tienda</span>
										<a class="btn btn-primary btn-sm" href="{{route('index')}}/producto/{{$producto->id}}" >Ver Detalles</a>
									@endif

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
<div class="row fondoWhite ultimo">
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

@stop

@section('js')
<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 3000
    });
  });


  $(document).ready(function () {
    $("div#makeMeScrollable").smoothDivScroll({
        touchScrolling: true,
        hotSpotScrolling: false
    });
</script>



{{HTML::script('assets/js/jquery.kinetic.min.js') }}
{{HTML::script('assets/js/jquery.smoothdivscroll-1.3-min.js') }}
{{HTML::script('assets/js/jquery.mousewheel.min.js') }}
{{HTML::script('assets/js/jquery-ui-1.10.3.custom.min.js') }}



@stop
@section('css')
{{ HTML::style('assets/css/styles/carrusel.css', array('media' => 'screen')) }}


@stop 
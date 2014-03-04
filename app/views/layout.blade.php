<!DOCTYPE HTML>
<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	{{-- Bootstrap --}}
	    {{ HTML::style('assets/css/bootstrap/bootstrap.min.css', array('media' => 'screen')) }}


		{{ HTML::style('assets/css/fonts-icons/style.css', array('media' => 'screen')) }}

	    {{ HTML::style('assets/css/style.css', array('media' => 'screen')) }}

	    {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
	    <!--[if lt IE 9]>
	        {{ HTML::script('assets/js/html5shiv.js') }}
	        {{ HTML::script('assets/js/respond.min.js') }}
	    <![endif]-->
	    @yield("css","")
    	<title>@yield("title","Grupo Siel Cancun")</title>
  	</head>
  	<body>
  		<input id="cartPush" type="hidden" value="{{route('cartPush')}}">
  		<input id="cartPop" type="hidden" value="{{route('cartPop')}}">
	  	{{-- Wrap all page content here --}}
	    <div id="wrap">
		  		
   			<div class="container">
   				<div id="header"><br>
   					<img class="logo" src="assets/img/logo.png" max-width="100%"  alt="GrupoSiel">
   					<p class="text-center" style="font-weight:bold;">
   						<span style="color:white;">Expertos en</span ><span style="color:#0E3768;"> Ventilación y bombeo</span>
   					</p>

			    </div>
   				<nav class="navbar navbar-default" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						    <span class="sr-only">Toggle navigation</span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
					    </button>
					    <a class="navbar-brand" href="#">Inicio</a>
					</div>

					  <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    <ul class="nav navbar-nav">
						    <li class="dropdown">
						        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
						        <ul class="dropdown-menu">
							        <li><a href="#">Ventilación y extracción</a></li>
							        <li><a href="#">Bombeo</a></li>
							        <li><a href="#">Presurizadores</a></li>
							        <li><a href="#">Tratamiento de agua</a></li>
						        </ul>
						    </li>	
					       	<li><a href="servicios">Servicios</a></li>
					        <li><a href="#">Nosotros</a></li>
					        <li><a href="contacto">Contacto</a></li>
					        <li><a href="#">Catalogo en línea</a></li>
					        <li><a href="#"><span class="icon-cart2" style="font-size: 20px;" ></span>MiCarrito(0)</a></li>
					    </ul>
					    <ul class="nav navbar-nav carrito">
					    	
					    </ul>

					</div><!-- /.navbar-collapse -->
				</nav>
				<?php
				echo "<pre>";
				print_r($menu);
				echo "</pre>";
				?>
	        	@yield('content')
	        	<div id="footer"><center>GrupoSiel 2014 - Todos los derechos reservados.</center></div>
	      	</div>
      	
      		
      	</div>
      	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	    <script src="//code.jquery.com/jquery.js"></script>
	    {{-- Include all compiled plugins (below), or include individual files as needed --}}
	    {{ HTML::script('assets/js/bootstrap.min.js') }}
	     @yield("js","")
	  	</body>
</html>
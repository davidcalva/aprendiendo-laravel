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
    	<title>@yield("title","Aprendiendo Laravel")</title>
  	</head>
  	<body>
	  	{{-- Wrap all page content here --}}
	    <div id="wrap">
		  		
   			<div class="container">
   				<div id="banner" align="left"><br>
   					<img src="assets/img/logo.png" max-width="100%" height="100" >
   					<p style="font-weight:bold;">
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
					       <li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Action</a></li>
					          <li><a href="#">Another action</a></li>
					          <li><a href="#">Something else here</a></li>
					          <li class="divider"></li>
					          <li><a href="#">Separated link</a></li>
					          <li class="divider"></li>
					          <li><a href="#">One more separated link</a></li>
					        </ul>
					        
					      </li>
					         <li><a href="#">Nosotros</a></li>
					          <li><a href="#">Contacto</a></li>
					          <li><a href="#">Catalogo en línea</a></li>

					    </ul>
					    <form class="navbar-form navbar-left" role="search">
					      <div class="form-group">
					        <input type="text" class="form-control" placeholder="Search">
					      </div>
					      <button type="submit" class="btn btn-default">Submit</button>
					    </form>

					    <ul class="nav navbar-nav carrito">

					    	<li><a href="#">Carrito(0)</a></li>
					    </ul>

					  </div><!-- /.navbar-collapse -->
					</nav>

	        	@yield('content')
	        	<div id="footer"><center>Copyright 2013 - Todos los derechos reservados.</center></div>
	      	</div>
      	
      		
      	</div>
      	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	    <script src="//code.jquery.com/jquery.js"></script>
	    {{-- Include all compiled plugins (below), or include individual files as needed --}}
	    {{ HTML::script('assets/js/bootstrap.min.js') }}
	     @yield("js","")
	  	</body>
</html>
<!DOCTYPE HTML>
<html lang="en">
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	{{-- Bootstrap --}}
	    {{ HTML::style('assets/css/bootstrap/bootstrap.css', array('media' => 'screen')) }}
		{{ HTML::style('assets/css/fonts-icons/style.css', array('media' => 'screen')) }}

	    {{ HTML::style('assets/css/style.css', array('media' => 'screen')) }}
	    {{ HTML::style('assets/css/styles/index.css', array('media' => 'screen')) }}

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
	   			<div class="row">
	   				<div class=".col-md-12 ">
	   					<div id="header">
		   					<h1 id="logo">
		   						<a id="imgLogo" href="{{route('index')}}" >Grupo Siel Cancun</a>
		   					</h1>
		   					<p class="text-center" style="font-weight:bold;">
		   						<span style="color:white;">Expertos en</span ><span style="color:#0E3768;"> Ventilación y bombeo</span>
		   					</p>
	   					</div>{{--fin header--}}
				    </div>
				</div>
				<div class="row fondoWhite">
   				<nav class="navbar navbar-default" role="navigation">
					
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							    <span class="sr-only">Toggle navigation</span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
						    </button>
						    <a class="navbar-brand" href="{{route('index')}}">Inicio</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						    <ul class="nav navbar-nav" >
							    <li class="dropdown">
							        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
							        <ul class="dropdown-menu categorias">
							        @if(!empty($menu))
							        	@for ($i=0; $i < sizeof($menu); $i++) 
							        		{{--comprobamos que no este vacio subcategorias para no poner el item--}}
							        		@if(!empty($menu[$i]['subcategorias']))
							        		<li class="">						        		
							        			<a href="#"> {{utf8_encode( $menu[$i]['categoria'] )}}</a>
							        			<ul class="subCategorias" >
						        				@for ($x=0; $x < sizeof($menu[$i]['subcategorias']) ; $x++) 
						        					@if(!empty($menu[$i]['subcategorias'][$x]['productos']))
							        					<li>
							        						<a href="#">{{ utf8_encode($menu[$i]['subcategorias'][$x]['subcategoria'])}}</a>
							        						<ul class="productos" >
							        						@for ($y=0; $y <sizeof($menu[$i]['subcategorias'][$x]['productos']) ; $y++) 
							        							<li>
							        								<a href="#">{{ utf8_encode( $menu[$i]['subcategorias'][$x]['productos'][$y]['producto'] )}} </a>
							        								<div class="detallesProducto hidden">
							        									<input type="hidden" name="precio" value="{{$menu[$i]['subcategorias'][$x]['productos'][$y]['precio_inicial']}}">
							        									<img src="$menu[$i]['subcategorias'][$x]['productos'][$y]['imagen']" alt="{{ utf8_encode( $menu[$i]['subcategorias'][$x]['productos'][$y]['producto'] )}}">
							        								</div>
							        								
							        							</li>
							        						@endfor
							        						</ul>
							        					</li>
							        				@endif
						        				@endfor
							        			</ul>
							        		</li>
						        			@endif
							        	@endfor
								    @endif
							        </ul>
							    </li>	
						       	<li><a href="{{route('servicios')}}">Servicios</a></li>
						        <li><a href="{{--route('nosotros')--}}">Nosotros</a></li>
						        <li><a href="{{route('contacto')}}">Contacto</a></li>
						        <li><a href="#">Catalogo en línea</a></li>
						        <li style="float: right!!important" ><a href="#"><span class="icon-cart2" style="font-size: 20px;" ></span>MiCarrito(0)</a></li>
						    </ul>

						</div><!-- /.navbar-collapse -->
					</div><!-- / container-fluid -->
				</nav>
				</div> 
	        	@yield('content')
	        	<div class="row">
		        	<div class=".col-md-12" id="footer"><center>GrupoSiel 2014 - Todos los derechos reservados.</center></div>
				</div>
	      	</div>
      	
      		
      	</div>
      	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	    <script src="//code.jquery.com/jquery.js"></script>
	    {{-- Include all compiled plugins (below), or include individual files as needed --}}
	    {{ HTML::script('assets/js/bootstrap.min.js') }}
	    {{ HTML::script('assets/js/scriptJS/scriptIndex.js') }}
	     @yield("js","")
	  	</body>
</html>
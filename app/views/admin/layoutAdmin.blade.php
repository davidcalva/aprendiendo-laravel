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
  		<input id="root" type="hidden" value="{{route('index')}}">
  		<input id="cartPush" type="hidden" value="{{route('cartPush')}}">
  		<input id="cartPop" type="hidden" value="{{route('cartPop')}}">
  		<input id="_token" type="hidden">
	  	{{-- Wrap all page content here --}}
	    <div id="wrap">
		  		
   			<div class="container">
	   			<div class="row">
	   				<div class=".col-md-12 ">
	   					<div id="header">
		   					<h1 id="logo">
		   						<a id="imgLogo" href="{{route('index')}}" >Grupo Siel Cancun</a>
		   					</h1>
		   					<p class="text-center header" style="font-weight: bold;position: absolute;margin-left: 100px;margin-top: 72px;">
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
							    <a class="navbar-brand" href="{{route('index')}}" style="@if(!empty($index)){{'background-color: #083E79'}}@endif">Inicio</a>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							    <ul class="nav navbar-nav" >
							    	<li>{{Form::mylink('Categorias','categorias',route('categorias.index'))}}</li>
									<li>{{Form::mylink('Subcategorias','subcategorias',route('subcategorias.index') )}}</li>
									<li>{{Form::mylink('Proveedores','Proveedores',route('subcategorias.index') )}}</li>

									<li>{{Form::mylink('Productos','productos',route('productos.index') )}}</li>
									<li>{{Form::mylink('Usuarios','usuarios',route('usuarios.index') )}}</li>
									<li>{{Form::mylink('Pedidos','pedidos',route('pedidos.index') )}}</li>
									<li>{{Form::mylink('Pagos','pagos',route('pagos.index') )}}</li>
								</ul>
							       	
							</div><!-- /.navbar-collapse -->
						</div><!-- / container-fluid -->
					</nav>
				</div> 
	        	@yield('content')
	        	<div class="row fondoWhite">
<div class="col-md-12" id="footer" class="pie">
						<div class="col-md-8">
							<div class="col-md-12">
								<div class="col-md-6 border">
										<h4 class="white">GrupoSiel 2014</h4>
										<ul class="foot ">
 											<li class="@if(!empty($historia)){{$historia}} @endif"><a class="white" href="{{route('historia')}}">Historia</a></li>
											<li class="@if(!empty($servicios)){{$servicios}} @endif white"><a class="white" href="{{route('servicios')}}">Servicios</a></li>
										   <li class="@if(!empty($privacidad)){{$privacidad}} @endif"><a class="white" href="{{route('privacidad')}}">Aviso de Privacidad</a></li>

											<li>Terminos y condiciones</li>
										</ul>

								</div>
								<div class="col-md-6 quitar border">
									<h4 class="white">Atención al cliente</h4>
										<ul class="foot">
											<li>Métodos de pago</li>
											<li class="@if(!empty($contacto)){{$contacto}} @endif"><a class="white" href="{{route('contacto')}}">Contacto</a></li>

											

										</ul>
										
								</div>

							</div>
							<div class="col-md-12 quitar">
								¿Ya nos sigues en nuestras redes sociales?
							</div>
		        		</div>
		        		<div clss="col-md-4 quitar">
		        			<h4 class="white quitar">Sección sobre compra segura</h4>

		        		</div>
				</div>				</div>
	      	</div>
      	
      		
      	</div>
      	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	    <script src="//code.jquery.com/jquery.js"></script>
	    {{-- Include all compiled plugins (below), or include individual files as needed --}}
	    {{ HTML::script('assets/js/bootstrap.min.js') }}
	    {{ HTML::script('assets/js/scriptJS/scriptIndex.js') }}
	    {{ HTML::script('assets/js/scriptJS/scriptCart.js') }}
	    @yield("js","")
	  	</body>
</html>
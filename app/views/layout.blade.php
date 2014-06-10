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
    	<title> @yield("title","Grupo Siel Cancun") </title>
  	</head>
  	<body>

  		<div id="fb-root"></div>
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=153052878122213";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
  		<input id="root" type="hidden" value="{{route('index')}}">
  		<input id="cartPush" type="hidden" value="{{route('cartPush')}}">
  		<input id="cartPop" type="hidden" value="{{route('cartPop')}}">
  		<input id="cartUpdate" type="hidden" value="{{route('cartUpdate')}}">
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
	   				<nav class="navbar navbar-default navbarbottom" role="navigation">
						
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
								    <li class="dropdown" style="display:none;">
								        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
								        <ul class="dropdown-menu categorias">
								        @if(!empty($menu))
								        	@for ($i=0; $i < sizeof($menu); $i++) 
								        		{{--comprobamos que no este vacio subcategorias para no poner el item--}}
								        		@if(!empty($menu[$i]['subcategorias']))
								        		<li class="">						        		
								        			<a href="#"> {{$menu[$i]['categoria']}}</a>
								        			<ul class="subCategorias" >
							        				@for ($x=0; $x < sizeof($menu[$i]['subcategorias']) ; $x++) 
							        					@if(!empty($menu[$i]['subcategorias'][$x]['productos']))
								        					<li>
								        						<a href="#">{{ $menu[$i]['subcategorias'][$x]['subcategoria']}}</a>
								        						<ul class="productos" >
								        						@for ($y=0; $y <sizeof($menu[$i]['subcategorias'][$x]['productos']) ; $y++) 
								        							<li>
								        								<a href="#">{{ $menu[$i]['subcategorias'][$x]['productos'][$y]['producto'] }} </a>
								        								<div class="detallesProducto hidden">
								        									<input type="hidden" name="precio" value="{{$menu[$i]['subcategorias'][$x]['productos'][$y]['precio_inicial']}}">
								        									<img src="{{route('index').'/assets/img/productos/'.$menu[$i]['subcategorias'][$x]['productos'][$y]['img']}}" alt="{{ utf8_encode( $menu[$i]['subcategorias'][$x]['productos'][$y]['producto'] )}}">
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
							       	<li class="@if(!empty($servicios)){{$servicios}} @endif"><a href="{{route('servicios')}}">Servicios</a></li>
							       
							        <li class="@if(!empty($contacto)){{$contacto}} @endif"><a href="{{route('contacto')}}">Contacto</a></li>
							        <li class="@if(!empty($catalogo)){{$catalogo}} @endif"><a href="{{route('catalogo')}}">Catalogo en línea</a></li>
							        <li id="liCart" style="width: auto;">
							        	<?php $tp = sizeof($cart);
							        	$total = 0;
							        	$items = 0;
							        	if(!empty($cart)){
							        		foreach ($cart as $producto) {
							        			$total += ($producto['cantidad']*$producto['precio']);
							        			$items += $producto['cantidad'];
							        		}
							        	}
								        	
							        	?>

							        	<a href="{{route('confirmPay')}} "><i class="icon-cart2" style="font-size: 15px;" ></i>&nbsp;Carrito[<span id="items"> <?php if($tp < 1){ echo "vacio";}else{echo $items. " item(s) - $".$total;} ?></span>]
							        	</a>
							        	<div id="cart" class="fondogris" style="display: none; width:300px;">
							        		<table id="cartTable" class="tableCar">
							        			<tbody id="cartTableBody">
								        		@if(!empty($cart))
							        				@foreach ($cart as $producto  )
							        					<tr class="fondogris prod">
							        						<td> <div style="width: 70px;"><img src="{{$producto['img']}}" alt="{{$producto['producto']}}" class="img-responsive"> </div></td>
							        						<td>{{$producto['cantidad']}} x {{$producto['producto']}}</td>
							        						<td>${{$producto['precio']}}</td>
							        						<td class="deletProd"> <i class="icon-close removeProducto"><input type="hidden" value="{{$producto['id']}}" name="id"></i></td>
							        					</tr>
							        				@endforeach
								        		@else
								        			<tr>
								        				<td colspan="4" >Vacio	</td>
								        			</tr>
								        		@endif
								        		</tbody>
							        		</table>
							        	</div>
							        </li>
							        @if(Session::has('datosCliente'))
							        <li><a href="{{route('pedidos.index')}}">Mis Pedidos</a></li>
							        <li><a href="{{route('logout')}}">Logout</a></li>
							        @else
							        <li><a href="{{route('loginCliente')}}">Login</a></li>
							        @endif
							    </ul>


							    <ul class="nav navbar-nav navbar-right">
							        <li><a href="http://www.facebook.com/SielCancun" target="_blank"><i class="icon-facebook"></i></a></li>
							 		<li><a href="https://twitter.com/sielcancun/status/263112352084414464" target="_blank"><i class="icon-twitter"></i></a></li>

							       
      							</ul>

							</div><!-- /.navbar-collapse -->
						</div><!-- / container-fluid -->
					</nav>
				</div> 
	        	@yield('content')
	        	<div class="row fondoWhite">
		        	<div class="col-md-12" id="footer">
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
								<div class="col-md-12">
									¿Ya nos sigues en nuestras redes sociales?
								</div>
								<div class="col-md-12">
									<nav class="navbar navbar-default navbarfooter" role="navigation">
						
										<ul class="nav navbar-nav navbar-left">
										  <li><a class="social" href="http://www.facebook.com/SielCancun" target="_blank"><i class="icon-facebook"></i></a></li>
										  <li><a class="social" href="https://twitter.com/sielcancun/status/263112352084414464" target="_blank"><i class="icon-twitter"></i></a></li>							       
	      								</ul>
									</nav>
								</div>

							</div>
		        		</div>
		        		<div clss="col-md-4 quitar">
		        			<h4 class="white quitar">Sección sobre compra segura</h4>

		        		</div>
				</div>
	      	</div>
      	
      		
      	</div>
      	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	    
	    {{ HTML::script('assets/js/jquery.js') }}

	    {{-- Include all compiled plugins (below), or include individual files as needed --}}
	    {{ HTML::script('assets/js/bootstrap.min.js') }}
	    {{ HTML::script('assets/js/scriptJS/scriptIndex.js') }}
	    {{ HTML::script('assets/js/scriptJS/scriptCart.js') }}
	    @yield("js","")
	  	</body>
</html>
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
							        <li class="@if(!empty($nosotros)){{$nosotros}} @endif"><a href="{{--route('nosotros')--}}">Nosotros</a></li>
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

							        	<a href="@if(!empty($cart) ) {{route('confirmPay')}} @endif"><i class="icon-cart2" style="font-size: 15px;" ></i>&nbsp;Carrito[<span id="items"> <?php if($tp < 1){ echo "vacio";}else{echo $items. " item(s) - $".$total;} ?></span>]
							        	</a>
							        	<div id="cart" style="display: none;">
							        		<table id="cartTable">
							        			<tbody id="cartTableBody">
								        		@if(!empty($cart))
								        			
								        				@foreach ($cart as $producto  )
								        					<tr>
								        						<td> <div style="width: 70px;"><img src="{{$producto['img']}}" alt="{{$producto['producto']}}" class="img-responsive"> </div></td>
								        						<td>{{$producto['cantidad']}} x {{$producto['producto']}}</td>
								        						<td>{{$producto['precio']}}</td>
								        						<td><i class="icon-close removeProducto"><input type="hidden" value="{{$producto['id']}}" name="id"></i></td>
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
	    {{ HTML::script('assets/js/scriptJS/scriptCart.js') }}
	    @yield("js","")
	  	</body>
</html>
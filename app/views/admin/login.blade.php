<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	{{-- Bootstrap --}}
	    {{ HTML::style('assets/css/bootstrap/bootstrap.min.css', array('media' => 'screen')) }}
		{{ HTML::style('assets/css/admin/login.css', array('media' => 'screen')) }}
	    {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
	    <!--[if lt IE 9]>
	        {{ HTML::script('assets/js/html5shiv.js') }}
	        {{ HTML::script('assets/js/respond.min.js') }}
	    <![endif]-->
    	<title>Inicio de sesion</title>
  	</head>
  	<body>
	  	{{-- Wrap all page content here --}}
	    <div id="wrap">
   			<div class="container">

   				<div id="wrapLoginForm">

		        	<form class="form-horizontal" role="form" method="post" action="{{route('doLogin')}}">
		        	<h3>Introduzca sus datos</h3>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Sign in</button>
							</div>
						</div>
					</form>
				</div>
	        	<div id="footer">Copyright 2013 - Todos los ponies reservados.</div>
	      	</div>
      	</div>
      	{{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
	    <script src="//code.jquery.com/jquery.js"></script>
	    {{-- Include all compiled plugins (below), or include individual files as needed --}}
	    {{ HTML::script('assets/js/bootstrap.min.js') }}
	</body>
</html>
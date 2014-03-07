@extends ('layout')

{{--@section ('title') Saludos a {{ $name }} @stop --}}

@section ('content')
<div class="row fondoWhite">
	 <div class="col-md-5 ">
	 	<div class="col-md-6 ">	
			<p>Tel.(998) 892 1250 <br>
			Fax (998) 892 1251</p>
		</div>
		<div class="col-md-6 ">
			<p>sielcancun@prodigy.net.mx <br>
			sielcancun@hotmail.com</p>
		</div>	
	</div>				
</div>
<div class="row fondoWhite">

	<div class="col-md-5 " >
		<form class="form-horizontal " role="form" method="post" action="">
        	<h3 class="text-center">Contacto</h3>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-3 control-label">Nombre:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
				</div>
			</div>
			<div class="form-group">
				<label for="inputemail" class="col-sm-3 control-label">Correo:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="email" name="email" placeholder="Correo">
				</div>
			</div>
			<div class="form-group">
				<label for="inputtelefono" class="col-sm-3 control-label">Teléfono:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
				</div>
			</div>
			<div class="form-group">
				<label for="inputcomments" class="col-sm-3 control-label">Comentarios:</label>
				<div class="col-sm-9">
					<textarea type="text" class="form-control" id="comments" name="comments" placeholder="Comentarios"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-10">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Suscribirme al boletín semanal
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-10">
					<button type="submit" class="btn btn-default">Enviar</button>
					<button type="submit" class="btn btn-default">Borrrar</button>
				</div>
			</div>
		</form>
	</div>

			  <div class="col-md-7" >
			  	
			  	<iframe width="640" height="480" class="responsive" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?ie=UTF8&amp;q=Grupo+Siel+Bombas+y+Equipos+Agroindustriales&amp;fb=1&amp;gl=mx&amp;hq=grupo+siel+cancun&amp;cid=11928730461720170746&amp;ll=21.169427,-86.83606&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.mx/maps?ie=UTF8&amp;q=Grupo+Siel+Bombas+y+Equipos+Agroindustriales&amp;fb=1&amp;gl=mx&amp;hq=grupo+siel+cancun&amp;cid=11928730461720170746&amp;ll=21.169427,-86.83606&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>
			  </div>
</div>
@stop
@extends ('layout')

@section ('title')
Contacto 
@stop 

@section ('content')
<div class="row fondoWhite">
		
	<div class="col-md-4">
			<h2>Contáctanos</h2>
			<p>
				Si usted está interesado en algún otro servicio,
				 lo invitamos a llenar nuestro formulario de contacto 
				 y nos comunicaremos con usted lo más pronto posible.
			</p>
			<p><span class="texto">Teléfono:</span></br> 
				(998) 892 1250</br></p>
			<p><span class="texto">Fax:</span></br> 
			(998) 892 1251</p>
	
			<p><span class="texto">Correo:</span></br>sielcancun@prodigy.net.mx <br>
			sielcancun@hotmail.com</p>
	
			<p><span class="texto">Dirección:</span></br>
			Av. J. L. Portillo, SMZ. 63 Mz. 46 Lt.14
			C.P. 77513. Cancun Q. Roo

		
	</div>
	
	<div class="col-md-8">
 	<br>
		<iframe width="100%" height="480" class="responsive" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?ie=UTF8&amp;q=Grupo+Siel+Bombas+y+Equipos+Agroindustriales&amp;fb=1&amp;gl=mx&amp;hq=grupo+siel+cancun&amp;cid=11928730461720170746&amp;ll=21.169427,-86.83606&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.mx/maps?ie=UTF8&amp;q=Grupo+Siel+Bombas+y+Equipos+Agroindustriales&amp;fb=1&amp;gl=mx&amp;hq=grupo+siel+cancun&amp;cid=11928730461720170746&amp;ll=21.169427,-86.83606&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>

	</div>
			
			
</div>
<div class="row fondoWhite">

	
	<div class="col-sm-offset-4 col-md-8" style="padding:7px;">
		<form class="form-horizontal" role="form" method="post" action="">
        	<h3 class="text-center">Contacto</h3>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nombre:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
				</div>
			</div>
			<div class="form-group">
				<label for="inputemail" class="col-sm-2 control-label">Correo:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="email" name="email" placeholder="Correo">
				</div>
			</div>
			<div class="form-group">
				<label for="inputtelefono" class="col-sm-2 control-label">Teléfono:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
				</div>
			</div>
			<div class="form-group">
				<label for="inputcomments" class="col-sm-2 control-label">Comentarios:</label>
				<div class="col-sm-10">
					<textarea type="text" class="form-control" id="comments" name="comments" placeholder="Comentarios"></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-4">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Suscribirme al boletín semanal
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-9">
					<button typr="submit" class="btn btn-primary">Ver aquí nuestro aviso de privacidad</button>
					<button type="submit" class="btn btn-primary">Enviar</button>
					<button type="reset" class="btn btn-primary">Borrrar</button>
				</div>
			</div>


		</form>
	</div>

</div>
@stop
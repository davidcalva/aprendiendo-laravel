@extends ('layout')

@section ('title')
Contacto 
@stop 

@section ('content')
<div class="row fondoWhite">
	<div class="col-md-12">
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
				C.P. 77513. Cancun Q. Roo</p>

			

			
		</div>
		
		<div class="col-md-8">
	 	<br>
			<iframe width="100%" height="480" class="responsive" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?ie=UTF8&amp;q=Grupo+Siel+Bombas+y+Equipos+Agroindustriales&amp;fb=1&amp;gl=mx&amp;hq=grupo+siel+cancun&amp;cid=11928730461720170746&amp;ll=21.169427,-86.83606&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.mx/maps?ie=UTF8&amp;q=Grupo+Siel+Bombas+y+Equipos+Agroindustriales&amp;fb=1&amp;gl=mx&amp;hq=grupo+siel+cancun&amp;cid=11928730461720170746&amp;ll=21.169427,-86.83606&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>

		</div>
				
	</div>			
</div>
<div class="row fondoWhite">
	<div class="col-md-12">
		<div class="col-sm-offset-4 col-md-8" style="padding:7px;">
			{{form::open(array('role'=>'form','action' => 'IndexController@postContact' ))}}
				

	        	<h3 class="text-center">Contacto</h3>
				<div class="form-group">
					
				
					<div class="col-sm-10">
						{{ Form::label('nombre', 'Nombre') }}

						{{ Form::text('nombre', null, array('placeholder' => 'Nombre', 'class' => 'form-control','required'=>'1')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10">					
						{{ Form::label('email', 'Email') }}
						{{ Form::text('email', null, array('placeholder' => 'Correo', 'class' => 'form-control','required'=>'1')) }}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10">
						{{ Form::label('telefono', 'Teléfono') }}
						{{ Form::text('telefono', null, array('placeholder' => 'Teléfono', 'class' => 'form-control','required'=>'1')) }}					
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-10">
						{{ Form::label('comments', 'Comentarios') }}
						{{ Form::textarea('comments', null, array('placeholder' => 'Comentarios', 'class' => 'form-control','required'=>'1')) }}											
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

						<button type="" class="btn btn-primary">Privacidad <a class="@if(!empty($privacidad)){{$privacidad}} @endif" href="{{route('privacidad')}}"></a></button>
						{{form::submit('Enviar', array('class'=>'btn btn-primary','id'=>'postContact'))}}
						
						<button type="reset" class="btn btn-primary">Borrrar</button>
					</div>
					
				
				</div>


			{{Form::close();}}
		</div>
			@include ('errores', array('errores' => $errors ))

	</div>	
	
</div>




@stop
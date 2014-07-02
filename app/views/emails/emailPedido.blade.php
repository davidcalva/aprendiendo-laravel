<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<style></style>
	</head>
	<body>
		<h3>Gracias por su compra, agradecemos mucho su preferencia</h3>
	
		<?php  $columnas = array('producto' => 'Producto','cantidad' => 'Cantidad','precio' => 'Precio Unitario' )?>
		<div class="table-responsive">
				{{Form::tablaResources($productos,'categorias','table table-hover table-bordered',$columnas,'categorias')}}
		</div>

		weee como vas jejeje ya casi termino solo faltan alguas cosas para el envio de mails
	</body>
</html>
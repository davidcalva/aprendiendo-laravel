<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<style>
		.headerproductos{
			color: red;
		}
		.tbodyproductos{
			color: blue;
		}
		</style>
	</head>
	<body>
		<h3>Gracias por su compra, agradecemos mucho su preferencia</h3>
	
		<?php  $columnas = array('producto' => 'Producto','cantidad' => 'Cantidad','precio' => 'Precio Unitario' )?>
		<div class="table-responsive">
				{{Form::tablaProductosEmail($productos)}}
		</div>

	</body>
</html>
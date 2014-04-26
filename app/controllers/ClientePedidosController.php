<?php  
/**
* 
*/
class ClientePedidosController extends BaseController
{
	
	public function savePedido(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		
		echo "guardemos le pedido";
		$car = Session::get('kart');
		echo "<pre>";
		print_r($car);
		echo "</pre>";
		exit;
		DB::transaction(function()
		{
			#dos primeros campos son ids
			$car = Session::get('kart');
			$productos = $_POST['productos'];
			$cliente   = $_POST['cliente'];
			$cantidad  = $_POST['cantidad'];
			$fecha     = date("Y-m-d H:i:s");
			$id = DB::table('pedidos')->insertGetId(
			    array('fecha_pedido' => $fecha, 'fecha_atendido' => '0000-00-00 0000:00' ,'fecha_atendido' => '0000-00-00 0000:00','estado' => 0,'usuario_id' => $cliente)
			);
			for ($i=0; $i < sizeof($productos); $i++) { 
				DB::table('pedidosproductos')->insert(
					array('pedido_id' => $id, 'producto_id' => $productos[$i], 'num_productos' => $cantidad[$i])
				);
			}
		});
	}
}
?>
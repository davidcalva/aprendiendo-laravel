<?php  
/**
* 
*/
class PanelAdminController extends BaseController
{
	public function index()
	{
		//ValidaAccesoController::validarAcceso('paneladmin','lectura');
		$modelPedidos = new PedidosPDO;
		/* mostrar informacion relevanye como pedidos, ventas ultimo mes,semana o cosas asi*/
		$data = array('categorias', 'subcategorias', 'productos', 'usuarios','pedidos','pagos');
		$pedidos = $modelPedidos->select("SELECT p.*, u.apellidos, u.email FROM pedidos p
										 INNER JOIN usuarios u ON u.id= p.usuario_id  
										 WHERE p.estado = 0 order by fecha_pedido");
		$pedidos = MyHps::estadoPedido($pedidos,'estado');
		#columnas de la tabla 
		$col = array("apellidos" => 'Apellidos', "email" => "Correo", "fecha_pedido" => "Fecha");
		return View::make('admin/panelAdmin',compact('pedidos','data','col'));#->with('data', $data);
		//echo "holas";
	}

}
?>
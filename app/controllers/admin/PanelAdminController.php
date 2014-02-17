<?php  
/**
* 
*/
class PanelAdminController extends BaseController
{
	public function index()
	{
		ValidaAccesoController::validarAcceso('paneladmin','lectura');
		/* mostrar informacion relevanye como pedidos, ventas ultimo mes,semana o cosas asi*/
		$data = array('categorias', 'subcategorias', 'productos', 'usuarios','pedidos','pagos');
		return View::make('admin/panelAdmin')->with('data', $data);
		//echo "holas";
	}

}
?>
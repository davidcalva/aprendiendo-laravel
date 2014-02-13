<?php  
/**
* 
*/
class PanelAdminController extends \BaseController
{
	public function index()
	{
		#$data = Usuarios::all();
		#$data = Categorias::all();
		$data = Productos::all();
		return View::make('admin/panelAdmin')->with('data', $data);
	}

}
?>
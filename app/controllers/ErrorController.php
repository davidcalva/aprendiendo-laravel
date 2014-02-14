<?php  
/**
* 
*/
class ErrorController extends BaseController
{
	public function index($codigo){

		$codigos = array('400' => 'Petición erronea.',
					 	 '401' => 'No autorizado.',
					 	 '403' => 'Prohibido.',
					 	 '404' => 'No se encuentra.',
					 	 '405' => 'Método no permitido.');
		$error = $codigo.": ".$codigos[$codigo];
		return View::make('error')->with('error',$error);
	}
}
?>
<?php

class ServiciosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	#index, create, show y edit son métodos GET. 
	public function index()
	{
		#$users = User::getAuthPassword(1);
		return View::make('servicios');
	}

}
?>
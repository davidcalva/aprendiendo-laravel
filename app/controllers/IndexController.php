<?php

class IndexController extends BaseController {

	/**
	 * Muesta la pagina de inicio
	 *
	 * @return Response
	 */
	#index, create, show y edit son métodos GET. 
	public function index()
	{
		#$users = User::getAuthPassword(1);
		return View::make('index');
	}

	/**
	 * Muesta la pagina de servicios
	 *
	 * @return Response
	 */
	public function servicios(){
		return View::make('servicios');
	}
	
	public function contacto(){
		return View::make('contacto');
	}
	



}
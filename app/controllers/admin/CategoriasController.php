<?php

class CategoriasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		ValidaAccesoController::validarAcceso('categorias','lectura');
		$categorias = Categorias::all();
		if(is_null($categorias)){
			$categorias = null;
		}else{
			$categorias = $categorias->toArray();
		}

		$columnas = array('categoria' => 'Categoria', 'descripcion' => 'Descripcion' );
		$data = array('categorias' => $categorias, 'columnas' => $columnas );
		return View::make('admin/categoriasIndex')->with('data', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		ValidaAccesoController::validarAcceso('categorias','lectura');
		$form_data = array('route' => array('categorias.store'), 'method' => 'post');
        $action    = 'Crear';
        $categoria = null;
		return View::make('admin/categoria',compact('categoria','form_data','action'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		ValidaAccesoController::validarAcceso('categorias','escritura');
		$categoria = new Categorias;
		$categoria->categoria = Input::get('categoria');
		$categoria->descripcion = Input::get('descripcion');
		$categoria->posicion = Input::get('posicion');
		$categoria->mostrar = Input::get('mostrar');

		$categoria->save();
		return Redirect::route('categorias.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		ValidaAccesoController::validarAcceso('categorias','lectura');
		$categoria = Categorias:: find($id);
		if(is_null($categoria)){
			return Redirect::route('ErrorIndex','404');
		}
		#$form_data = array('route' => array('categorias.update', $categoria->id), 'method' => 'DELETE');
		$form_data = array('route' => array('categorias.update', $categoria->id), 'method' => 'PATCH');
        $action    = 'Editar';
		return View::make('admin/categoria',compact('categoria','form_data','action'));#->with('data', $categoria);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		ValidaAccesoController::validarAcceso('categorias','escritura');
		$categoria = Categorias:: find($id);
		if(is_null($categoria)){
			return Redirect::route('ErrorIndex','404');
		}
		$categoria->categoria = Input::get('categoria');
		$categoria->descripcion = Input::get('descripcion');
		$categoria->posicion = Input::get('posicion');
		$categoria->mostrar = Input::get('mostrar');
		$categoria->save();
		return Redirect::route('categorias.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ValidaAccesoController::validarAcceso('categorias','escritura');
		$categoria = Categorias:: find($id);
		if(is_null($categoria)){
			echo 'Recurso no encontrado';
		}
		$categoria->delete();
		echo 1;
	}

}
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
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		echo "string".$id;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
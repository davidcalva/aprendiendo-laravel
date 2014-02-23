<?php

class SubcategoriasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		ValidaAccesoController::validarAcceso('subcategorias','lectura');
		$subcategorias = DB::table('subcategorias')
						->join('categorias','categorias.id','=','subcategorias.categoria_id')
						->select('subcategorias.id','subcategorias.subcategoria','subcategorias.descripcion','categorias.categoria')->get();
		if(is_null($subcategorias) || sizeof($subcategorias) <1 ){
			$subcategorias = null;
		}else{
			$subcategorias = MyHps::toArray( $subcategorias );
		}
		#print_r($subcategorias);
		#exit;
		$columnas = array('id' => 'id', 'subcategoria' => 'Subcategoria', 'categoria' => 'Categoria' );
		$data = array('subcategorias' => $subcategorias, 'columnas' => $columnas );
		return View::make('admin/subcategoriasIndex')->with('data', $data);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		ValidaAccesoController::validarAcceso('subcategorias','escritura');
		
		$categorias = Categorias::all();
		if(!is_null($categorias)){
			$categorias = $categorias->toArray();
		}
		$form_data = array('route' => array('subcategorias.store'), 'method' => 'post');
        $action    = 'Crear';
        $subcategoria = null;

		return View::make('admin/subcategoria',compact('subcategoria','form_data','action','categorias'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		ValidaAccesoController::validarAcceso('categorias','escritura');
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
		ValidaAccesoController::validarAcceso('categorias','escritura');
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
	}

}
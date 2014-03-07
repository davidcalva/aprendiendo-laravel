<?php

class ProductosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		#ValidaAccesoController::validarAcceso('productos','lectura');
		$productos = DB::table('productos')
						->leftJoin('subcategorias','productos.subcategoria_id','=','subcategorias.id')
						->select('productos.id','productos.producto','productos.descripcion','productos.precio_inicial','subcategorias.subcategoria')->get();
		if(is_null($productos) || sizeof($productos) <1 ){
			$productos = null;
		}else{
			$productos = MyHps::toArray( $productos );
		}
		#columnas para desplegar la informacion de la tabla
		$columnas = array('producto'=>'Producto','descripcion'=>'Descripcion','precio_inicial'=>'Precio','subcategoria'=>'Subcategoria');
		$data = array('productos' => $productos, 'columnas' => $columnas );
		return View::make('admin/productosIndex')->with('data', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		ValidaAccesoController::validarAcceso('productos','escritura');
		$categorias = Categorias::all();
		if (!is_null($categorias)) {
			$categorias = $categorias->toArray();
		}
		$subcategorias = Subcategorias:: all();
		if(!is_null($subcategorias)){
			$subcategorias = $subcategorias->toArray();
		}
		$proveedores = Proveedores::all();
		if(!is_null($proveedores)){
			$proveedores = $proveedores->toArray();
		}

		$form_data = array('route' => array('productos.store'), 'method' => 'post','enctype' => 'multipart/form-data');
        $action    = 'Crear';
        $producto = null;
		return View::make('admin/producto',compact('producto','form_data','action','subcategorias','proveedores','categorias'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		ValidaAccesoController::validarAcceso('productos','escritura');
		$producto = new Productos;

		if( $producto->validSave(Input::all()) ){
			return Redirect::route('productos.index');
		}else{
			return Redirect::route('productos.create')->withInput()->withErrors($producto->errores);
		}
		//$producto->
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
		ValidaAccesoController::validarAcceso('productos','escritura');
		$modelProductos = new ProductosPDO;
		$categorias = Categorias::all();
		if (!is_null($categorias)) {
			$categorias = $categorias->toArray();
		}

		$producto = Productos:: find($id);
		if(is_null($producto)){
			return Redirect::route('ErrorIndex','404');
		}
		$subcategorias = Subcategorias:: all();
		if(!is_null($subcategorias)){
			$subcategorias->toArray();
		}
		$proveedores = Proveedores::all();
		if(!is_null($proveedores)){
			$proveedores->toArray();
		}
		$subcategoria = Subcategorias::find($producto->subcategoria_id);
		$categoria = Categorias::find($subcategoria->categoria_id);
		$categoria_id = $categoria->id; 
		$form_data = array('route' => array('productos.update', $producto->id), 'method' => 'PUT');
        $action    = 'Editar';
		return View::make('admin/producto',compact('producto','form_data','action','categorias','subcategorias','proveedores','categoria_id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		ValidaAccesoController::validarAcceso('productos','escritura');
		$producto = Productos:: find($id);
		
		if(is_null($producto)){
			return Redirect::route('ErrorIndex','404');
		}
		if( $producto->validSave( Input::all() ) ){
			return Redirect::route('productos.index');
		}else{
			return Redirect::route('productos.edit',$id)->withInput()->withErrors($producto->errores);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ValidaAccesoController::validarAcceso('productos','escritura');
		$producto = Productos::find($id);
		if(is_null($producto)){
			echo 'Recurso no encontrado';
			exit;
		}
		$producto->delete();
		echo 1;
	}


}
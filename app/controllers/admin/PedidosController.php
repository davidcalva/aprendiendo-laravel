<?php

class PedidosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		ValidaAccesoController::validarAcceso('pedidos','lectura');
		if (Session::get('datosUsuario.perfil') == 'administrador' ) {
			#$pedidos = Pedidos::all()->byUsuario;#->allByUsuario();
			$pedidos = DB::table('pedidos')
						->join('usuarios','pedidos.usuario_id','=','usuarios.id')
						->select('pedidos.id','pedidos.fecha_pedido','pedidos.estado','usuarios.nombres')->get();
			
		}else{
			$usuario = Session::get('datosUsuario');
			$pedidos = DB::table('pedidos')
						->join('usuarios','pedidos.usuario_id','=','usuarios.id')
						->select('pedidos.id','pedidos.fecha_pedido','pedidos.estado','usuarios.nombres')
						->where('usuario_id', '=', $usuario['idUsuario'])
						->get();
		}
		if(is_null($pedidos) || sizeof($pedidos) <1 ){
			$pedidos = null;
		}else{
			$pedidos = MyHelpersController::toArray( $pedidos );
		}
		#print_r($pedidos);
		#exit;
		$pedidos = MyHelpersController::estadoPedido( $pedidos ,'estado'  );
		$columnas = array( 'estado' => 'Estado', 'nombres' => 'Cliente' );
		$data = array('pedidos' => $pedidos, 'columnas' => $columnas );
		return View::make('admin/pedidosIndex')->with('data', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		//
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
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

		$pedidos = new PedidosPDO;
		echo "string";
		echo "<pre";
		//print_r($pedidos->getPedidos());
		echo $pedidos->getPedidos();
		echo "<pre";
		/*
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
			$pedidos = MyHps::toArray( $pedidos );
		}
		#print_r($pedidos);
		#exit;
		$pedidos = MyHps::estadoPedido( $pedidos ,'estado'  );
		$columnas = array( 'estado' => 'Estado', 'nombres' => 'Cliente' );
		$data = array('pedidos' => $pedidos, 'columnas' => $columnas );
		return View::make('admin/pedidosIndex')->with('data', $data);
		*/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		ValidaAccesoController::validarAcceso('pedidos','escritura');
		$perfil = Perfiles::where('perfil','=','cliente')->get();
		if(is_null($perfil)){
			return Redirect::route('ErrorIndex','default');
		}
		$perfil = $perfil->toArray();
		
		$clientes = Usuarios::where('perfil_id','=',$perfil[0]['id'])->get();
		if(is_null($clientes)){
			return Redirect::route('ErrorIndex','default');
		}
		$clientes = $clientes->toArray();
		
		$productos = Productos::all();

		$form_data = array('route' => array('pedidos.store'), 'method' => 'post');
        $action    = 'Crear';
        $pedido = null;
		return View::make('admin/pedido',compact('pedido','form_data','action','clientes','productos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		# estado = 0 ->>pendiente, 1->enviado atendido o algo similar, 2->entregado
		ValidaAccesoController::validarAcceso('pedidos','escritura');
		$cliente   = $_POST['cliente'];
		$rules = array(
			'cliente'   => 'required|integer'
		);
		$validator = Validator::make( array('cliente' => $cliente ),$rules);

		if($validator->fails()){
			return Redirect::route('pedidos.create')->withInput()->withErrors($validator->errors());
		}else{
			DB::transaction(function()
			{
				#dos primeros campos son ids
				$productos = $_POST['productos'];
				$cliente   = $_POST['cliente'];
				$cantidad  = $_POST['cantidad'];
				$fecha     = date("Y-m-d H:i:s");
				$id = DB::table('pedidos')->insertGetId(
				    array('fecha_pedido' => $fecha, 'fecha_atendido' => '0000-00-00 0000:00' ,'fecha_atendido' => '0000-00-00 0000:00','estado' => 0,'usuario_id' => $cliente)
				);
				for ($i=0; $i < sizeof($productos); $i++) { 
					DB::table('pedidosproductos')->insert(
						array('pedido_id' => $id, 'producto_id' => $productos[$i], 'num_productos' => $cantidad[$i])
					);
				}
			});
			return Redirect::route('pedidos.index');
		}
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
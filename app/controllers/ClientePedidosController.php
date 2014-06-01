<?php  
/**
* 
*/
class ClientePedidosController extends BaseController
{
	
	public function savePedido(){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		
		echo "guardemos le pedido";
		$car = Session::get('kart');
		echo "<pre>";
		print_r($car);
		echo "</pre>";
		$invitado = Input::get('invitado');

		echo $invitado;
		
		#si se va hacer el pedido como invitado = 1
		
		DB::transaction(function()
		{
			$invitado = Input::get('invitado');
			$fecha = date("Y-m-d H:i:s");
			$cliente_id = ( Session::has('datosCliente') ) ? Session::get('datosCliente.id') : null;
			#si no es invitado
			if( ! $invitado ){
				# comprobamos que no este logeado para guardar el cliente
				if( ! Session::has('datosCliente') ){
					$arrCliente = array(
										'nombres'      => Input::get('nombre'), 
										'apellidos'    => Input::get('apellidos'), 
										'email'        => Input::get('email'), 
										'telefono'     => Input::get('telefono'), 
										'password'     => Input::get('password'), 
										'empresa'      => Input::get('empresa'), 
										'rfc'          => Input::get('rfc'), 
										'calleNum'     => Input::get('calle'), 
										'colonia'      => Input::get('colonia'), 
										'ciudad'       => Input::get('ciudad'), 
										'estado'       => Input::get('estado'), 
										'pais'         => Input::get('pais'), 
										'codigopostal' => Input::get('codigoPostal')
										);
					#guardar el cliente
					$cliente_id = DB::table('clientes')->insertGetId($arrCliente);
				}
			}
			#guardar pedido, 
			$pedido_id = DB::table('pedidos')->insertGetId(
			    array('fecha_pedido' => $fecha, 'fecha_atendido' => '0000-00-00 0000:00' ,'fecha_atendido' => '0000-00-00 0000:00','estado' => 0,'cliente_id' => $cliente_id)
			);
			# guardar pedidosproductos , pedidoInformacion
			$productos = Session::get('kart');
			foreach ($productos as $producto) { 
				DB::table('pedidosproductos')->insert(
					array('pedido_id' => $pedido_id, 'producto_id' => $producto['id'], 'num_productos' => $producto['cantidad'], 'precio' => $producto['precio'] )
				);
			}
			$arrPedidoInfo = array(
							'pedido_id'        => $pedido_id,
							'formaEnvio'       => Input::get('formaEnvio'),
							'formaPago'        => Input::get('formaPago'),
							'comentarioPedido' => Input::get('comentarioPedido'),
							'comentarioEnvio'  => Input::get('comentarioEnvio'),
							'nombresCliente'   => Input::get('nombre'), 
							'apellidos'        => Input::get('apellidos'), 
							'email'            => Input::get('email'), 
							'telefono'         => Input::get('telefono'), 
							'empresa'          => Input::get('empresa'), 
							'rfc'              => Input::get('rfc'), 
							'calleNum'         => Input::get('calleEnvio'), 
							'colonia'          => Input::get('coloniaEnvio'), 
							'ciudad'           => Input::get('ciudadEnvio'), 
							'estado'           => Input::get('estadoEnvio'), 
							'pais'             => Input::get('paisEnvio'), 
							'codigopostal'     => Input::get('codigoPostalEnvio')
						);
			DB::table('pedidoinformacion')->insert($arrPedidoInfo);
			
		});
	}

	public function validaEmail(){
		$email = Input::get('email');
		$modelClientes = new ClientesPDO;

		$cliente = $modelClientes->find('email',$email);
		#el cliente existe, 0 ok 
		$response['status'] = ( $cliente ) ? 1 : 0 ; 
		$response['msj']    = ( $cliente ) ? 'El email ya esta en uso' : 'ok' ; 


		echo json_encode($response);
	}
}
?>
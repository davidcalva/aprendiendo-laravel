<?php  
/**
* 
*/
class KartController extends BaseController
{
	/**
	*Funcion que servira para agregar productos al carrito de compra
	*/
	public function push(){
		$id_producto = Input::get('id_producto');
		$cantidad = Input::get('cantidad');
		#comprobamos que exista la variable de sesion
		if (!empty($_SESSION['kart'])){
			#si ya existe el producto solo agregar la cantidad 
			if(in_array( $id_producto, $_SESSION['kart']['ids'])){
				$_SESSION['kart']['productos'][$id_producto]['cantidad'] += $cantidad;
			}else{#si no se agrega el producto al carrito
				$producto = array(
					'id'       => $id_producto,
					'producto' => Input::get('producto'),
					'precio'   => Input::get('precio'),
					'cantidad' => $cantidad
				);
				$_SESSION['kart']['ids'][] = $id_producto;
				$_SESSION['kart']['productos'][$id_producto] = $producto;
			}   
		}else{#si no la creamos
			session_start();
			$_SESSION['kart'] = array();
			
			$producto = array(
				'id'       => $id_producto,
				'producto' => Input::get('producto'),
				'precio'   => Input::get('precio'),
				'cantidad' => $cantidad
			);
			$_SESSION['kart']['ids'][] = $id_producto;
			$_SESSION['kart']['productos'][$id_producto] = $producto;
		}

	}

	/**
	*Funcion que servira para quitar productos al carrito de compra
	*/
	public function pop(){
		$id_producto = Input::get('id_producto');
		if(in_array( $id_producto, $_SESSION['kart']['ids'])){
			unset($_SESSION['kart']['productos'][$id_producto]);
			$key = array_search($id_producto,$_SESSION['kart']['ids']);
			unset($_SESSION['kart']['id'][$key]);
		}
	}
}
?>
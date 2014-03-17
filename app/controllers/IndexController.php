<?php

class IndexController extends BaseController {

	public $menu;
	public $categorias;
	public $cart;
	/**
	*Constructor de la clase
	*/
	function __construct(){
		#creamos un objeto mnodelo de productos, solo usaremos el metodo selectm, para realizar consultas
		#se puede usar el objeto para despues modificar algo de la tabla productos
		$modelProductos = new ProductosPDO;
		#obtenemos las catgorias segun la consulta
		$categorias = $modelProductos->select("SELECT id,categoria FROM categorias WHERE mostrar=1");
		#este arreglo se usara para mostrar las categorias en el catalogo
		$this->categorias = $categorias;
		for ($i=0; $i < sizeof($categorias) ; $i++) { 
			#obtenemos las subcatgorias de la categoria actual
			$subcategorias = $modelProductos->select("SELECT id,subcategoria FROM subcategorias WHERE categoria_id=:id AND mostrar=1",array("id"=>$categorias[$i]['id'])); 
			$tSubcat = sizeof($subcategorias);
			#comprobamos que existan registros para agregar el array
			#if( $tSubcat > 0){
				for ($x=0; $x < $tSubcat ; $x++) { 
					#obtenemos los productos de la subcategoria actual
					$productos = $modelProductos->select("SELECT * FROM productos WHERE subcategoria_id = :id AND activo=1 ",array("id"=>$subcategorias[$x]['id']));
					#agregamos el areeglo productos al registro de la subcatgoria actual con sus productos
					$tPro = sizeof($productos);
					#comprobamos que existan registros para agregar el array
					#if ($tPro > 0) {
						$subcategorias[$x]['productos'] = $productos;
					#}	
				}
				#agregamos el arreglo subcategorias al registro categoria actual con sus subcategorias y productos agregados en ciclo anterior
				$categorias[$i]['subcategorias'] = $subcategorias;
			#}
		}
		$this->cart = Session::get('kart');
		$this->menu = $categorias;
	}
	/**
	 * Muesta la pagina de inicio
	 *
	 * @return Response
	 */
	#index, create, show y edit son métodos GET. 
	public function index()
	{
		$cart = $this->cart;
		#$users = User::getAuthPassword(1);
		$index = "index";
		return View::make('index',compact('index','cart'))->with('menu',$this->menu);
	}

	/**
	 * Muesta la pagina de servicios
	 *
	 * @return Response
	 */
	public function servicios(){
		$cart = $this->cart;
		$servicios = "open";
		return View::make('servicios',compact('servicios','cart'))->with('menu',$this->menu);
	}
	
	/**
	 * Muesta la pagina de servicios
	 *
	 * @return Response
	 */
	public function contacto(){
		$cart = $this->cart;
		$contacto = "open";
		return View::make('contacto',compact('contacto','cart'))->with('menu',$this->menu);
	}


	/**
	 * Muesta el catalogo
	 *
	 * @return Response
	 */	
	public function catalogo(){
		$cart = $this->cart;
		$catalogo = "open";
		$categorias = $this->categorias;
		return View::make('catalogo',compact('catalogo','categorias','cart'))->with('menu',$this->menu);
	}

}
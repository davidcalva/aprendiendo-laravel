<?php

class IndexController extends BaseController {

	public $menu;
	/**
	*Constructor de la clase
	*/
	function __construct(){
		#creamos un objeto mnodelo de productos, solo usaremos el metodo selectm, para realizar consultas
		#se puede usar el objeto para despues modificar algo de la tabla productos
		$modelProductos = new ProductosPDO;
		#obtenemos las catgorias segun la consulta
		$categorias = $modelProductos->select("SELECT id,categoria FROM categorias WHERE mostrar=1");
		for ($i=0; $i < sizeof($categorias) ; $i++) { 
			#obtenemos las subcatgorias de la categoria actual
			$subcategorias = $modelProductos->select("SELECT id,subcategoria FROM subcategorias WHERE categoria_id=:id AND mostrar=1",array("id"=>$categorias[$i]['id'])); 
			for ($x=0; $x < sizeof($subcategorias) ; $x++) { 
				#obtenemos los productos de la subcategoria actual
				$productos = $modelProductos->select("SELECT * FROM productos WHERE subcategoria_id = :id AND activo=1 ",array("id"=>$subcategorias[$x]['id']));
				#agregamos el areeglo productos al registro de la subcatgoria actual con sus productos
				$subcategorias[$x]['productos'] = $productos;
			}
			#agregamos el arreglo subcategorias al registro categoria actual con sus subcategorias y productos agregados en ciclo anterior
			$categorias[$i]['subcategorias'] = $subcategorias;
		}

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
		#$users = User::getAuthPassword(1);
		return View::make('index')->with('menu',$this->menu);
	}

	/**
	 * Muesta la pagina de servicios
	 *
	 * @return Response
	 */
	public function servicios(){
		return View::make('servicios')->with('menu',$this->menu);
	}
	
	/**
	 * Muesta la pagina de servicios
	 *
	 * @return Response
	 */
	public function contacto(){
		return View::make('contacto')->with('menu',$this->menu);
	}

		

}
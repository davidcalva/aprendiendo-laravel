<?php  
/**
* 
*/
class CatalogoController extends BaseController
{
	private $modelProductos;
	public function __construct(){
		$this->modelProductos = new ProductosPDO; 
	}
	/**
	*Metodo que devuelve todos los productos de un categoria
	*/
	public function getByCategorias(){
		$categorias = Input::get('categorias');
		$query = "SELECT p.*,s.subcategoria FROM productos p 
				INNER JOIN subcategorias s ON p.subcategoria_id = s.id
				INNER JOIN categorias c ON s.categoria_id = c.id
				WHERE ";
		$sQuery = "";
		$nCategorias = sizeof($categorias);
		$arrParams = array();
		if( $nCategorias > 1 ){
			for ($i=0; $i < $nCategorias; $i++) { 
				$sQuery .= " c.id = :id" .$i . " OR ";
				$arrParams['id'.$i] = $categorias[$i];
			}
			$sQuery = substr($sQuery, 0, -3);
			
		}elseif ( $nCategorias==1 ) {
			$sQuery = " c.id = :id0";
			$arrParams['id0'] = $categorias[0];
		}else{
			$query = substr($query,0,-6);
		}
		$query .= $sQuery;
		
		$productos = $this->modelProductos->select($query,$arrParams);
		$result['productos']     = $productos;
		$result['subcategorias'] = $this->modelProductos->select('SELECT id,subcategoria FROM subcategorias');
		echo json_encode($result);
	}


	/**
	*Metodo que devuelve todos los productos de una Subcategoria
	*/
	public function getBySubcategoria(){
		$subcategoria = Input::get('subcategoria');
		$query = "SELECT p.*,s.subcategoria FROM productos p 
				INNER JOIN subcategorias s ON p.subcategoria_id = s.id
				INNER JOIN categorias c ON s.categoria_id = c.id
				WHERE s.id = :id";
		$productos = $this->modelProductos->select($query,array('id' => $subcategoria));
		echo json_encode($productos);
	}
}
?>
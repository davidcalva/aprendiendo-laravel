<?php  
/**
* 
*/
class CatalogoController extends BaseController
{
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
		$modelProductos = new ProductosPDO; 
		$productos = $modelProductos->select($query,$arrParams);
		echo json_encode($productos);
		exit;
		echo '<pre>';
		print_r($productos);
		echo '</pre>';
		
	}


	/**
	*Metodo que devuelve todos los productos de una Subcategoria
	*/
	public function getProductsBySubategoria(){

	}
}
?>
<?php  
/**
* 
*/
class PedidosPDO extends ModelPDO
{
	protected $table = 'pedidos';

	public function getPedidos(){
		echo "string";
		$pedidos = $this->select("SELECT * FROM pedidos");
		return $pedidos."holas";
	}
}
?>
<?php


class ModelPDO
{
    private $_db;
    protected $table;
    
    public function __construct() {
        $this->_db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }
    /**
    *Funcion que recibe un sql y devuelve un arreglo, solo para selects
    */
    public function select($query){
    	try {
    		$result = $this->_db->prepare($query);
	        $result ->execute();
	        #return $result->fetchAll(PDO::FETCH_ASSOC);

	        return $query;
    	}catch (PDOException $e) {
    		return $e->getMessage();
    	}
    }
    /**
    *Funcion que recibe un sql para editar, modificar o elminar 
    *regresa 0 si todo fue correcto 
    *Create update delete
    */
    public function cud($query){
    	try {
    		$result = $this->_db->prepare($query);
	        $result ->execute();
	        if($result){
				return 0; 
			}else{
				return 1;
			}
    	}catch (PDOException $e) {
    		return $e->getMessage();
    	}
    }
    /**
    *insertar 
    *Funcion que recibe un arreglo asociativo con los paramentros que se insertaran
    *las keys del arreglo son los nombres de la columnas y el valor, es el valor que se insertara
    *regresa 0 si todo ok , cualquier otro valor se considera como error
    */
    public function insert($arr){
    	try{
    		$params = "(";
    		$values = "(";
    		foreach ($arr as $key => $value) {
    			$params .= $key.",";
    			$values .= ":".$key.",";
    		}
    		
    		$params = substr($params,0,-1);
			$values = substr($values,0,-1);
    		$values .= ")";
    		$params .= ")";
			$query = "INSERT INTO " . $this->table . $params . " VALUES " . $values;
			$statement = $this->_db->prepare($query);
			foreach ($arr as $key => $value) {
				$param = ":".$key;
				$statement->bindParam($param,$this->getText($value));
			}
			$statement->execute();
			if($result){
				return 0; 
			}else{
				return 1;
			}
		}catch(PDOException $e){
			return $e->getMessage();
		}
    }
    /**
    *insertar 
    *Funcion que recibe un arreglo asociativo con los paramentros que se actualizaran
    *las keys del arreglo son los nombres de la columnas y el valor, es el valor que se actualizara
    *regresa 0 si todo ok , cualquier otro valor se considera como error
    */
    public function update($arr,$where,$valor){
    	try{
    		$params = "";
    		foreach ($arr as $key => $value) {
    			$params .= $key."= :" . $key . ",";
    		}
    		$params = substr($params,0,-1);
    		$params .= " where " . $where . " = :valor";
			$query = "UPDATE " . $this->table . " SET " . $params;
			$statement = $this->_db->prepare($query);
			foreach ($arr as $key => $value) {
				$param = ":".$key;
				$statement->bindParam($param,$this->getText($value));
			}
			$statement->bindParam(':valor',$this->getText($valor));
			$statement->execute();
			if($result){
				return 0; 
			}else{
				return 1;
			}
		}catch(PDOException $e){
			return $e->getMessage();
		}
    }
    /**
	*Funcion para eliminar
	*recibe el valor que buscara para eliminar
	*y el campo donde buscara el valor
	*regresa 0 ok otro valor es considerado como un error
    */
    public function delete($valor,$where){
    	try{
			$query = "DELETE FROM " . $this->table . " WHERE " . $where . "= :valor";
			$statement = $this->_db->prepare($query);
			
			$statement->bindParam(':valor',$this->getText($valor));
			$statement->execute();
			if($result){
				return 0; 
			}else{
				return 1;
			}
		}catch(PDOException $e){
			return $e->getMessage();
		}
    }

    public function sp($sp,$params){

        
    }

    private function getText($string)
    {
        if(!empty($string)){
            $string = htmlspecialchars($string, ENT_QUOTES);
            return $string;
        }
        return null;
    }
}

?>
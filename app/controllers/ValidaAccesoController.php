<?php  

/**
* 
*/
class ValidaAccesoController 
{
	/**De acuerdo a los controladores el metodo index(), create() y show() debera validar permisos de lectura
	*otros metodos como create(),store(),edit(),update() y destroy() deberan validar permisos de escritura
	*/

	/**
	*Funcion que valida el acceso a los modulos cuando se hace peticiones normales
	*recibe el modulo y el permiso que desea valida (lestura o escritura)
	*este metodo solo valida las peticines sincronas
	*/
	public static function validarAcceso($modulo,$permiso){
		#comprobamos que exista el arreglo de accesos
		if (Session::has('modulosAcceso'))
		{
			$accesos = Session::get('modulosAcceso');
		    #si encontramos el modulo en el arreglo de accesos tiene permisos al modulo
		    if(array_key_exists($modulo, $accesos)){
		    	if($accesos[$modulo][$permiso] == 1){#validamos los permisos
		    		return;
		    	}else{#no tiene permiso
		    		header('Location: '.route('ErrorIndex','401' ));
		    		exit;
		    	}
		    }else{#no se tiene acceso al modulo
		    	header('Location: '.route('ErrorIndex','401' ));
		    	exit;
		    }
		}else
		{#no se ha inciado sesion
			header('Location: '.route('loginIndex') );
			exit;
		}
	}
	/**
	*Funcion que valida el acceso a los modulos cuando se hace peticines ajax
	*recibe el modulo y el permiso que desea valida (lestura o escritura)
	*este metodo solo valida las peticines sincronas
	*/
	public static function validarAccesoAjax($modulo,$permiso){
		#comprobamos que exista el arreglo de accesos
		if (Session::has('modulosAcceso'))
		{
			$accesos = Session::get('modulosAcceso');
		    #si encontramos el modulo en el arreglo de accesos tiene permisos al modulo
		    if(array_key_exists($modulo, $accesos)){
		    	if($accesos[$modulo][$permiso] == 1){#validamos los permisos
		    		return;
		    	}else{#no tiene permiso
		    		header('Location: '.route('ErrorIndex','401' ));
		    		exit;
		    	}
		    }else{#no se tiene acceso al modulo
		    	header('Location: '.route('ErrorIndex','401' ));
		    	exit;
		    }
		}else
		{#no se ha inciado sesion
			header('Location: '.route('loginIndex') );
			exit;
		}
	}
}

?>
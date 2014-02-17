<?php 
	#macro para crear boton value del boton, nombre e id, enabled y clase css
	Form::macro('mybutton', function($value,$name,$enabled=true,$class=""){
		$disabled = ($enabled) ? "" : "disabled";
		$button = '<input type="button" id="'.$name.'" value="' . $value .'" name="' . $name .'" '. $disabled .' class="' . $class . '">';
		return $button;
	});
	Form::macro('mylabel',function($text,$for="",$class=""){
		$label = '<label for="' . $for . '" class="'.$class.'" >' . $text .'</label>';
		return $label;
	});
	Form::macro('mylink',function($text,$id,$href="#",$class="")
	{
		$link = '<a href="'.$href.'" id="'.$id.'" class="'.$class.'"">'.$text.'</a>'; 
		return $link;
	});
	Form::macro('mylistUl',function($arr,$id,$class="")
	{
		$ul = '<ul id="'.$id.' class="'.$class.'">';
		for ($i=0; $i < sizeof($arr) ; $i++) { 
			$ul .= '<li id="'.$id.'_'.$i.'" >'.$arr[$i].'</li>';
		}
		$ul .= '</ul>';
		return $ul;
	});

	/**
	*Esta macro sirve para crear las tablas que listan los recursos,
	*por lo que contendran los botones de ELIMINAR Y EDITAR
	*recibe:
	*	$arr      -> el array que contiene los datos que se pondran en la tabla
	*	$id       -> id de la tabla
	*	$class    -> clases css de la tabla
	*	$columnas -> un array asociativo:
	*									$columna[key] => valor, donde :
	*									key es la clave que referencia el campo del arreglo $arr
	*									valor es el nombre de la columna que se mostrara en la tabla ejemplo:
	*									
	*  |---------------|----------------|
	*  |columnas[valor]|columnas[valor] |
	*  |---------------|----------------|
	*  |arr[key]       |arr[key]        |
	*  |---------------|----------------|
	*	$resource -> nombre del recurso
	*/
	Form::macro('tablaResources',function($arr,$id,$class="",$columnas,$resource){
		$tCol = sizeof($columnas);
		$tabla  = '<table id="'.$id.'" class ="'.$class.'">';
		$tabla .= '    <thead>';
		$tabla .= '        <tr>';
		$tabla .= '            <th>No.</th>';
		foreach ($columnas as $key => $columna) {
			$tabla .= '        <th>'.$columna.'</th>'; 
		}
		$tabla .= '			   <th>Opciones</th>'; 
		$tabla .= '        </tr>';
		$tabla .= '    </thead>';
		$tabla .= '    <tbody>';
		#validacion por si es null o no tiene registros
		if(is_null($arr) || sizeof($arr) < 1 ){
			$tabla .= '    <tr>';
			foreach ($columnas as $key => $value) {
				$tabla .= '    <td>Vacio</td>';
			}
			$tabla .= '    </tr>';
		}else{
			for ($i=0; $i < sizeof($arr); $i++) { 
				$tabla .= '    <tr>';
				$tabla .= '            <td>'.($i+1).'</td>';
				foreach ($columnas as $key => $value) {
					$tabla .= '        <td>'.$arr[$i][$key].'</td>';
				}
				$tabla .= '				<td><span id="'.route($resource.'.index').'/'.$arr[$i]['id'].'" class="glyphicon glyphicon-pencil"></span>';
				$tabla .= '				<span id="'.route($resource.'.index').'/'.$arr[$i]['id'].'" class="glyphicon glyphicon-remove-circle"></span></td>';
				$tabla .= '    </tr>';
			}
		}
			
		$tabla .= '    </tbody>';
		$tabla .= '</table>';
		return $tabla;
	});
?>
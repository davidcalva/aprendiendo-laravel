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
?>
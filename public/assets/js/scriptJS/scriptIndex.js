$(function(){
	/*eventos para cuando se pasa el mouse sobre las categorias*/
	$(".categorias li")
	.mouseenter(function(){
		//$(".categorias li [name=puntero]").addClass('hidden');
		var subCategorias = $(this).find('.subCategorias');

		//var hidden = subCategorias.find(".hidden");
		var y = $(this).offset().top;
		//$(".subCategorias").addClass('hidden');
		//subCategorias.removeClass('hidden');
		subCategorias.removeProp('style');
		//esta clase solo se agrega para saber cual fue el ultimo elemento que se desplego
		//subCategorias.prop('name','puntero');
		//subCategorias.addClass('dropdown-menu');
		subCategorias.offset({top:y});
		//console.log("mostrar menu");
	})
	.mouseleave(function(){
		var subCategorias = $(this).find('.subCategorias');
		//subCategorias.addClass('hidden');
		//console.log("ocultar menu");
	})
	/*poner fondo al elemento de la lista categorias cuando se pasa a subcatgorias*/
	$(".categorias>li>a")
	.mouseleave(function(){
		$(this).prop("style","background-color:#F5F5F5");
	})//se quita el fondo a todos los elementos al quitar el mouse de un elemto catgorias
	.mouseenter(function(){
		$(".categorias>li>a").removeProp("style");
	})

	/*eventos para cuando se pasa el mouse sobre un subcatgoria*/
	$(".subCategorias li")
	.mouseenter(function(){
		//$(".subCategorias li").find('.puntero').addClass('hidden');
		var productos = $(this).find('.productos');
		console.log(productos.length);
		var y = $(this).offset().top;
		//$(".productos").addClass('hidden');
		productos.removeClass('hidden');
		//esta clase solo se agrega para saber cual fue el ultimo elemento que se desplego
		productos.addClass('puntero');
		productos.offset({top:y});
		console.log("mostrar productos");
	})
	.mouseleave(function(){
		var productos = $(this).find('.productos');
		//productos.addClass('hidden');
		console.log("ocultar productos");
	})
	/*poner fondo al elemento de la lista subcategorias cuando se pasa a productos*/
	$(".subCategorias>li>a")
	.mouseleave(function(){
		$(this).prop("style","background-color:#F5F5F5");
	})//se quita el fondo a todos los elementos al quitar el mouse de un elemto produproductos
	.mouseenter(function(){
		$(".subCategorias>li>a").removeProp("style");
	})
})
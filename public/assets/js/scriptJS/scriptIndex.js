$(function(){
	/*eventos al pasar el mouse sobre las categorias*/
	$('.categorias>li:has(ul)').hover(
		function(e){
			$(this).find('ul:first').css({display: "block"});
			var y = $(this).offset().top;
			$(this).find('ul:first').offset({top:y});
		},
		function(e){
			$(this).find('ul').css({display: "none"});
		}
    );
    /*eventos al pasar el mouse sobre las subcategorias*/
	$('.subCategorias>li:has(ul)').hover(
		function(e){
			$(this).find('ul:first').css({display: "block"});
			var y = $(this).offset().top;
			$(this).find('ul:first').offset({top:y});
		},
		function(e){
			$(this).find('ul').css({display: "none"});
		}
    );
    /*eventos al pasar el mouse en un producto*/
    $('.productos>li:has(div)').hover(
		function(e){
			$(this).find('div:first').removeClass('hidden');
			$(this).find('div:first').css({display: "block"});
			var y = $(this).offset().top;
			$(this).find('div:first').offset({top:y});
		},
		function(e){
			$(this).find('div').css({display: "none"});
		}
    );
    /*poner fondo al elemento de la lista categorias cuando se pasa a subcatgorias*/
	$(".categorias>li>a")
	.mouseleave(function(){
		$(this).prop("style","background-color:#F5F5F5");
	})//se quita el fondo a todos los elementos al quitar el mouse de un elemto catgorias
	.mouseenter(function(){
		$(".categorias>li>a").removeProp("style");
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
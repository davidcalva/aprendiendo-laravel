$(function(){
	$(".categorias li")
	.mouseenter(function(){
		var subCategorias = $(this).find('.subcategorias');
		subCategorias.removeClass('hidden');
		console.log("mostrar menu");
	})
	.mouseleave(function(){
		var subCategorias = $(this).find('.subcategorias');
		subCategorias.addClass('hidden');
		console.log("ocultar menu");
	})
})
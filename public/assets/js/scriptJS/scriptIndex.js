$(function(){
	$('.categorias>li:has(ul)').hover(
		function(e){
			$(this).find('ul:first').css({display: "block"});
			var y = $(this).offset().top;
			$(this).find('ul:first').offset({top:y});
			console.log("lalala");
		},
		function(e){
			$(this).find('ul').css({display: "none"});
			console.log("none");
		}
    );
	$('.subCategorias>li:has(ul)').hover(
		function(e){
			$(this).find('ul:first').css({display: "block"});
			var y = $(this).offset().top;
			$(this).find('ul:first').offset({top:y});
			console.log("subcategorias");
		},
		function(e){
			$(this).find('ul').css({display: "none"});
			console.log("subcategorias none");
		}
    );
    /*$('.productos>li:has(ul)').hover(
		function(e){
			$(this).find('ul:first').css({display: "block"});
			console.log("productos");
		},
		function(e){
			$(this).find('ul').css({display: "none"});
			console.log("productos none");
		}
    );*/
})
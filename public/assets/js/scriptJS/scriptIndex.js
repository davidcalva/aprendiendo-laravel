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


function ajax(url,data,method,dataType){
	var objAjax = $.ajax({
					url:url,
					type:method,
					data : data,
					dataType : dataType,
					beforeSend : function(){
						$('body').prop('style','cursor:wait;')
					}
				})
	return objAjax;
}

/**
*Funcion que sirve pra permitir solo numeros, solo caracteres o ambos
*evento: onkeypress , permitidos : num|car|num_car
*/
function f_permite(elEvento, permitidos) {
    // Variables que definen los caracteres permitidos
    var numeros = "0123456789";
    var caracteres = " abcdefghijklmnÃ±opqrstuvwxyzABCDEFGHIJKLMNÃ‘OPQRSTUVWXYZ";
    var numeros_caracteres = numeros + caracteres;
    var teclas_especiales = [8, 37, 39, 46];
    
    // Seleccionar los caracteres a partir del parÃ¡metro de la funciÃ³n
    switch(permitidos) {
        case 'num':
            permitidos = numeros;
            break;
        case 'car':
            permitidos = caracteres;
            break;
        case 'num_car':
            permitidos = numeros_caracteres;
            break;
    }

    // Obtener la tecla pulsada
    var evento = elEvento || window.event;
    var codigoCaracter = evento.charCode || evento.keyCode;
    var caracter = String.fromCharCode(codigoCaracter);

    // Comprobar si la tecla pulsada es alguna de las teclas especiales
    // (teclas de borrado y flechas horizontales)
    var tecla_especial = false;
    for(var i in teclas_especiales) {
        if(codigoCaracter == teclas_especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
    // o si es una tecla especial
    return permitidos.indexOf(caracter) != -1 || tecla_especial;
}

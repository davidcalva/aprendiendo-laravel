//productos obtenidos
var arrProductos;
/*productos que se mostraban antes del change*/
var beforeShow = 10;
/*esta variable sirve para saber el numero de pagina actual */
var puntero = 0;
$(function(){
	getProductos('');
	$("#categorias input[type=checkbox]").on('click',function(){
		var ids = $("input[name='categorias[]']").serialize();
		getProductos(ids);
	})
	$("#mostrar").on("change",function(){
		var showCurrent = $(this).val();
		var inicio;
		var fin; 

		if( puntero == 1 ){
			inicio = 0;
			fin    = showCurrent;
		}else{
			/*obtenemos la posicion de inicio para mostrar los productos*/
			inicio = puntero * showCurrent;
			fin    = (puntero * showCurrent)+showCurrent;
		}
		//console.log(puntero+"inicio:"+inicio+"fin:"+fin);
		$("#results").html( buildThumbnails(inicio,fin) );
		buildPagination('paginacion');
		beforeShow = showCurrent;
	})
	$("#subcategoria").on('change',function(){
		alert("cambio sub categoria");
	})
	/*eventos al dar clic en los numeros de las paginas*/
	$("#paginacion").on("click","li>a",function(e){
		e.preventDefault();
		var pag    = $(this).text();
		if(pag != '»' && pag != '«'){
			var tP     = arrProductos.length;
			var li     = $(this).parent();
			
			/*numero de productos por pagina*/
			var numPro = $("#mostrar").val();
			/*intervalo inicio para mostrar los productos*/
			var inicio = (pag-1) * numPro;
			/*numero de paginas total*/
			var tPages = tP/numPro;
			var residuo= tP%numPro;
			/*si existe un residuo se agrega una pagina mas y se trunca tpages*/
			tPages = (residuo != 0) ? Math.floor(tPages) + 1 : Math.floor(tPages);

		
			$("#paginacion").find('.active').removeClass('active');
			li.addClass('active');
			puntero = pag;
		

			/*si la pag es 1 bloqueamos el elemento atras*/
			if(pag == 1){
				$("#paginacion").find("li:first").addClass('disabled')
			}else{
				$("#paginacion").find("li:first").removeClass('disabled')
			}
			/*si la pagina es la ultima se bloque el boton siguiente de la paginacion*/
			if(pag == tPages){
				$("#paginacion").find("#next").addClass('disabled');
			}else{/*si no se desbloquea*/
				$("#paginacion").find("#next").removeClass('disabled');
			}
			/*se comprueba que no sean los botones next y before*/

			
			$("#results").html(buildThumbnails(inicio,(inicio+numPro)));
		}
	})
	/*eventos para botones next y before de la paginacion*/
	$("#paginacion").on("click","#next",function(e){
		e.preventDefault();
		if( !$(this).hasClass('disabled') ){
			var current = $("#paginacion").find(".active").removeClass('active').next().addClass('active');
			var tP      = arrProductos.length;
			var numPro  = $("#mostrar").val();
			/*numero de paginas total*/
			var tPages  = tP/numPro;
			var residuo = tP%numPro;
			var inicio  = (puntero)*numPro;
			/*si existe un residuo se agrega una pagina mas y se trunca tpages*/
			console.log(inicio);
			tPages = (residuo != 0) ? Math.floor(tPages) + 1 : Math.floor(tPages);
			if(tPages == current.text()){
				$("#paginacion #next").addClass('disabled');
				$("#paginacion #before").removeClass('disabled');
			}
			$("#results").html(buildThumbnails(inicio,(inicio+numPro)));
		}
	})
	$("#paginacion").on("click","#before",function(e){
		e.preventDefault();
		if( !$(this).hasClass('disabled') ){
			var numPro  = $("#mostrar").val();
			var inicio = (puntero-1)*numPro;
			var current = $("#paginacion").find(".active").removeClass('active').prev().addClass('active');
			if(1 == current.text()){
				$("#paginacion #before").addClass('disabled');
				$("#paginacion #next").removeClass('disabled');
			}
			$("#results").html(buildThumbnails(inicio,(inicio+numPro)));
		}
	})
})

/*
*Funcion que obiene un json con los productos por categoria
*Recibe las ids de las categorias y el numero de productos que se mostraran
*llama a buildThumbnails para poner el numero de articulos por pagina
*/
function getProductos(ids){
	var objAjax = ajax('catalogo/getByCategorias',ids,'post','json',1);
	objAjax
	.done(function(data){
		arrProductos = data;
		//se obtienen las subcategorias
		var strSubcategorias = '<option value="">Todas</option>';
		for (var i in data ) {
			strSubcategorias += '<option value="'+data[i].subcategoria_id+'">'+ data[i].subcategoria+'</option>';
		}
		$("#subcategoria").html(strSubcategorias);
		//numero de productos por pagina
		var numPro = $("#mostrar").val();
		buildPagination('paginacion');
		puntero = 1;
		$("#results").html(buildThumbnails(0,numPro));
		$('body').prop('style','cursor:auto;');
	})
	.fail(function(){
		$('body').prop('style','cursor:auto;')
		$("#results").html('Error');
		
	})
}
/*Construye las cajas para las imgs
*recibe inicio y fin
*/
function buildThumbnails(inicio,fin){
	var htmlProductos = "";
	/*total de articulos*/
	var nP = arrProductos.length;
	/*se valida que no se deborde*/
	if(fin >= nP ){
		fin = nP;
	}
	if(inicio < 0){
		inicio = 0;
	}
	for (var x = inicio; x < fin; x++) {
		htmlProductos += '<div class="col-xs-6 col-md-3">';
		htmlProductos +=	'<a href="#" class="thumbnail">';
		htmlProductos +=		'<img src="assets/img/productos/'+arrProductos[x].img+'" alt="'+arrProductos[x].producto+'">';
		htmlProductos +=	'</a>';
		htmlProductos += '</div>';
	};
	return htmlProductos;
}

/*funcion que construye la paginacion*/
function buildPagination(contener){
	/*total de productos*/
	var tP         = arrProductos.length;
	/*productos por pagina*/
	var numPro     = $("#mostrar").val();
	var tPages     = tP/numPro;
	var residuo    = tP%numPro;
	var disabled   = "";
	var active     = "";
	var pagination = '<li id="before" class="disabled"><span>&laquo;</span></li>';
	tPages = (residuo != 0) ? Math.floor(tPages) + 1 : Math.floor(tPages);
	
	for (var i = 0; i < tPages; i++) {
		active = (i == 0)?'active':'';
		pagination += '<li class="'+active+'"><a href="#">'+(i+1)+'</a></li>';
	}
	disabled = (tPages == 1)?'disabled':'';
	pagination += '<li id="next" class="'+disabled+'"><a  href="#">&raquo;</a></li>';
	$("#"+contener).html(pagination);
}

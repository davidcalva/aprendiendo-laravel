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
		console.log(puntero+"inicio:"+inicio+"fin:"+fin);
		$("#results").html( buildThumbnails(inicio,fin) );
		buildPagination('paginacion');
		beforeShow = showCurrent;
	})
	$("#subcategoria").on('change',function(){
		alert("cambio sub categoria");
	})
	$("#paginacion").on("click","li>a",function(e){
		e.preventDefault();
		var pag = $(this).text();
		alert($(this).text());
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
	//total de articulos
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
		htmlProductos +=		'<img data-src="assets/img/productos/'+arrProductos[x].img+'" alt="'+arrProductos[x].producto+'">';
		htmlProductos +=	'</a>';
		htmlProductos += '</div>';
		//productos += thumbnails(arrProductos[x].img,arrProductos[x].precio_inicial,arrProductos[x].producto)
	};
	//htmlProductos = arrProductos.length;
	return htmlProductos;
}

/*funcion que construye la paginacion*/
function buildPagination(contener){
	/*total de productos*/
	var tP = arrProductos.length;
	/*productos por pagina*/
	var numPro = $("#mostrar").val();
	var tPages = tP/numPro;
	var pagination = '<li class="disabled"><span>&laquo;</span></li>';
	for (var i = 0; i < tPages; i++) {
		pagination += '<li><a href="#">'+(i+1)+'</a></li>';
	}
	pagination += '<li><a href="#">&raquo;</a></li>';
	$("#"+contener).html(pagination);
}


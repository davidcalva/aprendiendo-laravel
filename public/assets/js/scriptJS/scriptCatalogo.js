$(function(){
	$("#categorias input[type=checkbox]").on('click',function(){
		var ids = $("input[name='categorias[]']").serialize();

		var objAjax = ajax('catalogo/getByCategorias',ids,'post','json');
		objAjax
		.done(function(data){
			var productos = "";
			for (var x in data) {
				productos += thumbnails(data[x].img,data[x].precio_inicial,data[x].producto)
			};
			$('body').prop('style','cursor:auto;')
			$("#results").html(productos);
			//alert(data);
		})
		.fail(function(){
			$('body').prop('style','cursor:auto;')
			$("#results").html('Error');
			//alert('Error');
		})
		//alert(ids);
	})
})

function thumbnails(dir,precio,producto){
	var html  = '<div class="col-xs-6 col-md-3">';
		html +=		'<a href="#" class="thumbnail">';
		html +=			'<img data-src="assets/img/productos/'+dir+'" alt="'+producto+'">';
		html +=		'</a>';
		html +=	'</div>';
	return html;
}
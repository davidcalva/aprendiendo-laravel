$(function(){
	$("#categoria_id").on("change",function(){
		var id = $(this).val();
		var url = $("#root").val()+"/subcategorias/getSubcategoriasByCategoria"
		var peticion = ajax(url,"categoria_id="+id,'post','json'); 
		peticion
		.done(function(data){
			var option = "";
			for(x in data){
				option += '<option value="'+data[x].id+'">'+data[x].subcategoria+'</option>'; 
			}
			$("#subcategoria_id").html(option);
		})
		.fail(function(){
			alert("Ocurrio un problema");
		})
	})
	$("input[name=imgFile]").on("change",function(){
		$("#img").val($(this).val())
	})

})

function ajax(url,data,method,dataType){
	var objAjax = $.ajax({
					url:url,
					type:method,
					data : data,
					dataType : dataType
				})
	return objAjax;
}
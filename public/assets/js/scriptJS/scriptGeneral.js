$(function(){
	/*evento vinculado a todos los botone eliminar*/
	$(".icon-close").on('click',function(e){
		e.preventDefault();
		alert($(this).prop('href'));
		var resp = ajax()
	})
})


function ajax(url,data,method){
	var objAjax = $.ajax({
					url:url,
					type:method,
					data : data
				})
	return objAjax;
}
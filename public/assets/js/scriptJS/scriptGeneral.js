$(function(){
	
	/*evento vinculado a todos los botone eliminar*/
	$(".icon-close").on('click',function(e){
		e.preventDefault();
		var link = $(this).parent().parent();
		var data = '_token='+$('input[name=_token]').val();+'_method=DELETE';
		var resp = ajax($(this).prop('href'),data,'delete');
		resp.done(function(data){
			if(data == 1){
				link.remove()
			}else{
				alert('No se pudo eliminar el recurso');
			}
		})
		.fail(function(){
			alert('error');
		})
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
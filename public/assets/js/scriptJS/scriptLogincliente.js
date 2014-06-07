$(function(){
	$("#login").on('click',function(e){
		e.preventDefault();
		var data = 'email='+$("#email_cliente").val()+'&password='+$("#password_cliente").val();
		var url  = $("#root").val() + '/login';
		var objAjax = ajax(url,data,'post','json', 0 );

		objAjax
		.done(function(data){
			$('body').attr('style','cursor:auto;');
			if( data['status'] == 0 ){
				alert(data['redirec']);
			}else{
				alert(data['msj']);
			}
		})
		.fail(function(){
			alert('Ocurrio un problema');
		})
	})
})
var cont = 1;

$(function(){
	//alert('lalala');
	var cartPop = $("#cartPop").val();
	var cartPush = $("#cartPush").val();
	
	$("#add").on('click',function(){
		var producto = "id="+cont+"&producto=bomba&precio=100&cantidad=1";
		
		var objAjax = ajax(cartPush,producto,'post');
		objAjax
			.done(function(data){
				$("#resul").html(data);
				//alert(data);
			})
			.fail(function(){
				alert("Ocurrio un problema");
			})
		if(cont < 3){
			cont += 1;
		}
		
	})
	$("#quit").on('click',function(){
		//alert(cartPop);
		var producto = "id="+cont+"&producto=bomba&precio=100&cantidad=1"; 
		var objAjax = ajax(cartPop,producto,'post');
		objAjax
			.done(function(data){
				$("#resul").html(data);
				//alert(data);
			})
			.fail(function(){
				alert("Ocurrio un problema");
			})
		if(cont > 0){
			cont -= 1;
		}
		//alert("quit");	
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
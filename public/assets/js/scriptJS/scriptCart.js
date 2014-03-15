
var cartPop = $("#cartPop").val();
var cartPush = $("#cartPush").val();

function addCart(){
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
}
function removeCart(){
	//alert(cartPop);
	var producto = "id="+cont+"&producto=bomba&precio=100&cantidad=1"; 
	var objAjax = ajax(cartPop,producto,'post','json',0);
	objAjax
		.done(function(data){
			$("#resul").html(data);
			//alert(data);
		})
		.fail(function(){
			alert("Ocurrio un problema");
		})	
}


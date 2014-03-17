
var cartPop = $("#cartPop").val();
var cartPush = $("#cartPush").val();

function addCart(id,name,img,precio){
	var producto = "id="+id+"&producto="+name+"&cantidad=1&img="+img+"&precio="+precio;
	var objAjax = ajax(cartPush,producto,'post','json',0);
	objAjax
		.done(function(data){
			//$("#resul").html(data);
			//alert(data);
			$('body').attr('style','cursor:auto;');
		})
		.fail(function(){
			alert("Ocurrio un problema");
		})
}
function removeCart(id){
	//alert(cartPop);
	var producto = "id="+id; 
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


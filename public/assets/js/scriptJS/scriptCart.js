
var cartPop    = $("#cartPop").val();
var cartPush   = $("#cartPush").val();
var cartUpdate = $("#cartUpdate").val();

function addCart(id,name,img,precio){
	var producto = "id="+id+"&producto="+name+"&cantidad=1&img="+img+"&precio="+precio;
	var objAjax  = ajax(cartPush,producto,'post','json',0);
	objAjax
		.done(function(data){
			var numPro = 0;
			var total  = 0;
			if(data.length > 0){
				for(var x in data){
					total += (parseFloat(data[x].precio)*parseFloat(data[x].cantidad));
					numPro += parseInt(data[x].cantidad);
				}
				var tabla = buildTableCart(data);
				$("#cartTableBody").html(tabla);
				$("#items").html(numPro+' item(s) - $'+total);
				/*si existe el elemento se re construye la tabla*/
				var confirmCarTbody = $("#confirmCarTbody");
				if(confirmCarTbody.length > 0){
					$("#confirmCarTbody").html(buildConfirCarTbody(data));
				}
			}else{
				$("#cartTableBody").html('<tr><td colspan="4">Vacio</td></tr>');
				$("#items").html('Vacio');
				/*si existe el elemento se re construye la tabla*/
				var confirmCarTbody = $("#confirmCarTbody");
				if(confirmCarTbody.length > 0){
					$("#confirmCarTbody").html(buildConfirCarTbody(data));
				}
			}
			$('body').attr('style','cursor:auto;');
		})
		.fail(function(){
			alert("Ocurrio un problema");
		})
}
function removeCart(id){
	var producto = "id="+id; 
	var objAjax = ajax(cartPop,producto,'post','json',0);
	objAjax
		.done(function(data){
			var numPro = 0;
			var total  = 0;
			if(data.length > 0){
				for(var x in data){
					total += (parseFloat(data[x].precio)*parseFloat(data[x].cantidad));
					numPro += parseInt(data[x].cantidad);
				}
				var tabla = buildTableCart(data);
				$("#cartTableBody").html(tabla);
				$("#items").html(numPro+' item(s) - $'+total);
				/*si existe el elemento se re construye la tabla*/
				var confirmCarTbody = $("#confirmCarTbody");
				if(confirmCarTbody.length > 0){
					$("#confirmCarTbody").html(buildConfirCarTbody(data));
				}
			}else{
				$("#cartTableBody").html('<tr><td colspan="4">Vacio</td></tr>');
				$("#items").html('Vacio');
				/*si existe el elemento se re construye la tabla*/
				var confirmCarTbody = $("#confirmCarTbody");
				if(confirmCarTbody.length > 0){
					$("#confirmCarTbody").html(buildConfirCarTbody(data));
				}
			}
			$('body').attr('style','cursor:auto;');
		})
		.fail(function(){
			alert("Ocurrio un problema");
		})	
}
function updateCart(id,cantidad){
	var producto = "id="+id+"&cantidad="+cantidad;
	var objAjax  = ajax(cartUpdate,producto,'post','json',0);
	objAjax
		.done(function(data){
			var numPro = 0;
			var total  = 0;
			if(data.length > 0){
				for(var x in data){
					total += (parseFloat(data[x].precio)*parseFloat(data[x].cantidad));
					numPro += parseInt(data[x].cantidad);
				}
				var tabla = buildTableCart(data);
				$("#cartTableBody").html(tabla);
				$("#items").html(numPro+' item(s) - $'+total);
				/*si existe el elemento se re construye la tabla*/
				var confirmCarTbody = $("#confirmCarTbody");
				if(confirmCarTbody.length > 0){
					$("#confirmCarTbody").html(buildConfirCarTbody(data));
				}
			}else{
				$("#cartTableBody").html('<tr><td colspan="4">Vacio</td></tr>');
				$("#items").html('Vacio');
				/*si existe el elemento se re construye la tabla*/
				var confirmCarTbody = $("#confirmCarTbody");
				if(confirmCarTbody.length > 0){
					$("#confirmCarTbody").html(buildConfirCarTbody(data));
				}
			}
			$('body').attr('style','cursor:auto;');
		})
		.fail(function(){
			alert("Ocurrio un problema");
		})
}
/*funcion que construye una tabla para mostrar los productos del cart en el menu apartir de un json
* con un boton para eliminar
*/
function buildTableCart(json){
	var tabla = '';
	if (json.length > 0) {
		for(var registro in json){
			tabla += '<tr>';
			if(registro.length > 0){
				tabla += '	<td><div style="width: 70px;"><img src="'+json[registro].img+'" alt="'+json[registro].producto+'" class="img-responsive"> </div></td>';
				tabla += '	<td>'+json[registro].cantidad+' x '+json[registro].producto+'</td>';
				tabla += '	<td>'+json[registro].precio+'</td>';
				tabla += '	<td><i class="icon-close removeProducto"><input type="hidden" value="'+json[registro].id+'" name="id"></i></td>';
				
			}
			tabla += '</tr>';
		}
	}else{
		tabla += '<tr><td colspan="4">Vacio</td></tr>';
	}
	return tabla;
}

/*funcion que construye una tabla para mostrar los productos del cart en el menu apartir de un json
* con un boton para eliminar
*/
function buildConfirCarTbody(json){
	var tabla = '';
	if (json.length > 0) {
		for(var registro in json){
			tabla += '<tr>';
			if(registro.length > 0){
				tabla += '  <td> <div style="width: 70px;"><img src="'+json[registro].img+'" alt="'+json[registro].producto+'" class="img-responsive"> </div></td>';
				
				tabla += '	<td>'+json[registro].producto+'</td>';
				tabla += '	<td>'+json[registro].precio+'</td>';
				tabla += '	<td >'+'<input type="text" class="form-control"  value="'+json[registro].cantidad+'"><i class="icon-spinner blockIcon" ></i></td>';
				tabla += '	<td><i class="icon-close removeProducto"><input type="hidden" value="'+json[registro].id+'" name="id"></i></td>';
				
			}
			tabla += '</tr>';
		}
	}else{
		tabla += '<tr><td colspan="4">Vacio</td></tr>';
	}
	return tabla;
}

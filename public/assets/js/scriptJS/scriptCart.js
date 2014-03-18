
var cartPop = $("#cartPop").val();
var cartPush = $("#cartPush").val();

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
			}else{
				$("#cartTableBody").html('<tr><td colspan="4">Vacio</td></tr>');
				$("#items").html('Vacio')
			}
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
			}else{
				$("#cartTableBody").html('<tr><td colspan="4">Vacio</td></tr>');
				$("#items").html('Vacio')
			}
			$('body').attr('style','cursor:auto;');
		})
		.fail(function(){
			alert("Ocurrio un problema");
		})	
}
/*funcion que construye una tabla apartir de un json
* con un boton para eliminar
*/
function buildTableCart(json){
	var tabla = '';
	if (json.length > 0) {
		for(var registro in json){
			tabla += '<tr>';
			if(registro.length > 0){
				tabla += '	<td><div style="width: 70px;"><img src="'+json[registro].img+'" alt="'+json[registro].producto+'}" class="img-responsive"> </div></td>';
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

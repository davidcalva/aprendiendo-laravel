
$(function(){
	var tr;
	var productos;

	$("#agregar").on("click",function(){
		productos = $("#productos").html();
		tr = '<tr><td></td><td><select class="form-control" name="producto[]" >'+productos+'</select></td><td></td><td></td></tr>';
		$('#pedido_productos').append(tr);
	})

	$("#pedido_productos").on('change','select[class=form-control]',function(){
		
		var id = $(this).val();
		var tr = $(this).parent().parent();
		var tdFirst = tr.find(':nth-child(1)');

		tdFirst.html(id);
		

		alert(id);
	})
})

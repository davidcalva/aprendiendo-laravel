$(function(){

	$("#confirmacionPedido").on('click',function(){
		alert("holas");
	})
	
	$("#openPaso2").on("click",function(){
		if($("#registrarCuenta").prop('checked')){
			$("#headPanel2").html($("#headPanel2").text()+' y la cuenta.');
		}else{
			$("#headPanel2").html('Paso 2: Detalles de facturacion.');
		}
		$("#editPaso1").removeAttr('style');
		$("#paso1").slideUp('slow');
		$("#paso2").slideDown('slow');
	})
	
	$("#openPaso3").on("click",function(){
		$("#editPaso2").removeAttr('style');
		$("#paso2").slideUp('slow');
		$("#paso3").slideDown('slow');
	})
	$("#openPaso4").on("click",function(){
		$("#editPaso3").removeAttr('style');
		$("#paso3").slideUp('slow');
		$("#paso4").slideDown('slow');
	})
	$("#openPaso5").on("click",function(){
		$("#editPaso4").removeAttr('style');
		$("#paso4").slideUp('slow');
		$("#paso5").slideDown('slow');
	})
	$("#openPaso6").on("click",function(){
		$("#editPaso5").removeAttr('style');
		$("#paso5").slideUp('slow');
		$("#paso6").slideDown('slow');
	})

	$("#editPaso1").on("click",function(){
		$("#paso1").slideDown('slow');
		$("#paso2").slideUp('slow');
		$("#paso3").slideUp('slow');
		$("#paso4").slideUp('slow');
		$("#paso5").slideUp('slow');
		$("#paso6").slideUp('slow');
	})
	$("#editPaso2").on("click",function(){
		$("#paso1").slideUp('slow');
		$("#paso2").slideDown('slow');
		$("#paso3").slideUp('slow');
		$("#paso4").slideUp('slow');
		$("#paso5").slideUp('slow');
		$("#paso6").slideUp('slow');
	})
	$("#editPaso3").on("click",function(){
		$("#paso1").slideUp('slow');
		$("#paso2").slideUp('slow');
		$("#paso3").slideDown('slow');
		$("#paso4").slideUp('slow');
		$("#paso5").slideUp('slow');
		$("#paso6").slideUp('slow');
	})
	$("#editPaso4").on("click",function(){
		$("#paso1").slideUp('slow');
		$("#paso2").slideUp('slow');
		$("#paso3").slideUp('slow');
		$("#paso4").slideDown('slow');
		$("#paso5").slideUp('slow');
		$("#paso6").slideUp('slow');
	})
	$("#editPaso5").on("click",function(){
		$("#paso1").slideUp('slow');
		$("#paso2").slideUp('slow');
		$("#paso3").slideUp('slow');
		$("#paso4").slideUp('slow');
		$("#paso5").slideDown('slow');
		$("#paso6").slideUp('slow');
	})
	$("#editPaso6").on("click",function(){
		$("#paso1").slideUp('slow');
		$("#paso2").slideUp('slow');
		$("#paso3").slideUp('slow');
		$("#paso4").slideUp('slow');
		$("#paso5").slideUp('slow');
		$("#paso6").slideDown('slow');
	})
})
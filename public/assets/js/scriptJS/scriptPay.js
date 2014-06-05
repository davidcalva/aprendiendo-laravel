$(function(){
	//bandera para saber si se validara el email, en caso de que este loguado el cliente no es necesario validar que exista el email
	//si es uno se valida el email 
	var bndValEmail = 1 ;
	$("#login").on('click',function(){
		var data = 'email='+$("#email_cliente").val()+'&password='+$("#password_cliente").val();
		var url  = $("#root").val() + '/login';
		var objAjax = ajax(url,data,'post','json', 0 );

		objAjax
		.done(function(data){
			$('body').attr('style','cursor:auto;');
			if( data['status'] == 0 ){
				$("#box_Password").hide();
				$("#openPaso2").click();
				$("#editPaso1").hide();

				$("#nombre").val(data['cliente'].nombres);
				$("#apellidos").val(data['cliente'].apellidos);
				$("#email").val(data['cliente'].email);
				$("#telefono").val(data['cliente'].telefono);
				$("#empresa").val(data['cliente'].empresa);
				$("#rfc").val(data['cliente'].rfc);
				$("#calle").val(data['cliente'].calleNum);
				$("#colonia").val(data['cliente'].colonia);
				$("#ciudad").val(data['cliente'].ciudad);
				$("#codigoPostal").val(data['cliente'].codigopostal);
				$("#estado").val(data['cliente'].estado);
				$("#pais").val(data['cliente'].pais);
				bndValEmail = 0;
			}else{
				alert(data['msj']);
			}
		})
		.fail(function(){
			alert('Ocurrio un problema');
		})
	})
	
	$("#openPaso2").on("click",function(){
		if($("#registrarCuenta").prop('checked')){
			$("#headPanel2").html($("#headPanel2").text()+' y la cuenta.');
			$("#box_Password").removeClass('hide');
		}else{
			$("#headPanel2").html('Paso 2: Detalles de facturacion.');
			$("#box_Password").addClass('hide');
		}
		$("#editPaso1").removeAttr('style');
		$("#paso1").slideUp('slow');
		$("#paso2").slideDown('slow');
	})
	
	$("#openPaso3").on("click",function(){
		var valEmail = true;
		if( $("#registrarCuenta").prop('checked') ){
			valEmail = validarEmail();
		}

		if( valEmail || bndValEmail == 0){
			if( $("#usarEnvio").prop('checked') ){
				copiarDatosEnvio(true);
			}else{
				copiarDatosEnvio(false);
			}
			$("#editPaso2").removeAttr('style');
			$("#paso2").slideUp('slow');
			$("#paso3").slideDown('slow');
		}
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

function copiarDatosEnvio(copiar){
	if(copiar){
		$("#calleEnvio").val( $("#calle").val() );
		$("#coloniaEnvio").val( $("#colonia").val() );
		$("#ciudadEnvio").val( $("#ciudad").val() );
		$("#codigoPostalEnvio").val( $("#codigoPostal").val() );
		$("#estadoEnvio").val( $("#estado").val() );
		$("#paisEnvio").val( $("#pais").val() );
	}else{
		$("#calleEnvio").val( '');
		$("#coloniaEnvio").val('');
		$("#ciudadEnvio").val('');
		$("#codigoPostalEnvio").val('');
		$("#estadoEnvio").val('');
		$("#paisEnvio").val('');
	}
	
}

function validarEmail(){
	var data = 'email='+$("#email").val();
	var url = $("#root").val() + '/savePedido/validarEmail';

	var objAjax = ajax(url,data,'post','json', 1 );

	objAjax
	.done(function(data){
		$('body').attr('style','cursor:auto;');
		/*remarcar el campo email*/
		if( data['status'] == 1 ){
			return false;
		}else{
			return true;
		}
	})
	.fail(function(){
		alert('Ocurrio un problema');
	})
}
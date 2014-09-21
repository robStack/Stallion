$(function() {
	$('#guardarUsuario').click(function(){
		var user = $('#usuario').serialize();
		$.ajax({
			type: "POST",
			url: "users/create",
			data: user,
			success: function(response){
				if(response.status == 1){
					console.log('True');
				}
				else{
					var mensajes = JSON.parse(response.errores);
					console.log(mensajes);	
				}
			},
			 error: function(jq,status,message) {
		        alert('Error al procesar la solicitud. Status: ' + status + ' - Message: ' + message);
		    }
		});
	});
});
$(function() {
	$('#guardarUsuario').click(function(){
		var user = $('#usuario').serialize();
		$('.errores-usuario').html('');
		$('#usuario .form-group').removeClass('has-error');
		$.ajax({
			type: "POST",
			url: "users/create",
			data: user,
			success: function(response){
				if(response.status){
					$('#f1_container ').addClass('flip');
					$('#frontface').addClass('invisible');
					$('#backface').removeClass('invisible');
					$('#backface').html(response.message);
					$('.modal-footer').addClass('invisible');
				}
				else{
					var mensajes = response.errores;
					$.each(mensajes, function(i, val) {
						var list = '';
						var colSm = $('#'+i).parent();
						var formGroup = colSm.parent().addClass('has-error');
						$(colSm).append('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
						$.each(val, function(index, value){
							list += '<li class="error">'+value+'</li>';
						});
						$(colSm).find('.errores-usuario').html(list);
					});
				}
			},
			 error: function(jq,status,message) {
		        alert('Error al procesar la solicitud. Status: ' + status + ' - Message: ' + message);
		    }
		});
	});
});
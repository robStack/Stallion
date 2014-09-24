$(function() {
	$('[data-toggle="tooltip"]').tooltip();

	$('.usuario').click(function(){
		var id = $(this).attr('name'), usuario;
		var panel = $(this).next();
		var currentButton = $(this).children().last();
		panel.slideToggle(400, function(){
			if(panel.is(':visible')){
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                $.get("users/profile/"+id, function(response) {
                	if(response.status){
                		usuario = response.mensaje;
                		panel.find('.fullnameUsuario').html(usuario.userName);
            			panel.find('.imagenPerfil').html('<img src="'+usuario.avatar+'" class="img-responsive img-circle">');
            			panel.find('.nameUsuario').html(usuario.fullName);
            			panel.find('.emailUsuario').html(usuario.email);
            			panel.find('.typeUsuario').html(usuario.typeUser);
            			panel.find('.urlUsuario').html(usuario.website);
						panel.find('.aboutUsuario').html(usuario.about);
                	}
                	else
                		perfil.html('<h3>'+response.mensaje+'</h3>');
                });
            }
            else{
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
		});
	});

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

	$('#modalCrear').on('hidden.bs.modal', function (e) {
		document.location.reload(true)
	});
});
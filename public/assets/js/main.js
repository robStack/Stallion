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

	$('#modalCrear').on('hidden.bs.modal', function (e) {
		document.location.reload(true)
	});

	$('.verUsuario').click(function(){
		var id = $(this).attr('name');
		var perfil = $('#perfilUsuario');
		$.ajax({
			type: "GET",
			url: "users/profile/"+id,
			success: function(response){
				var usuario = response.mensaje;
				if(response.status){
					$('#imagenPerfil').append('<img src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle">');
					$('#nombreUsuario').append(usuario.userName);
					$('#fullnameUsuario').append(usuario.fullName);
					$('#emailUsuario').append(usuario.email);
					$('#typeUsuario').append(usuario.typeUser);
					$('#urlUsuario').append('<a href="'+usuario.website+'" target="_blank">'+usuario.website+'</a>');
					$('#aboutUsuario').append(usuario.about);
				}
				else{
					perfil.html('<h3>'+response.mensaje+'</h3>');
				}
			},
			 error: function(jq,status,message) {
		        alert('Error al procesar la solicitud. Status: ' + status + ' - Message: ' + message);
		    }
		});
	});
});
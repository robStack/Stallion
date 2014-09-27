$(function() {
	$('[rel="tooltip"]').tooltip();

	function read(){
		$.ajax({
			type: "GET",
			url: "users/users",
			success: function(response){
				$('#tabla-usuarios').html(response);
			},
			error: function(jq,status,message) {
		        console.log('Error al procesar la solicitud. Status: ' + status + ' - Message: ' + message);
		    }
		});
	}

	read();

	$('body').on('click','.usuario', function(){		
		var id = $(this).attr('name'), usuario;
		var panel = $(this).next();
		var currentButton = $(this).children().last();	
		panel.slideToggle(400, function(){
			if(panel.is(':visible')){
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                $.get("users/profile/"+id, function(response) {
                	panel.add('.loader').removeClass('invisible');
					panel.add('.panel').addClass('invisible');	
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
					$('#mensajesUsuario').html(response.message);
					$('#modalCrear').modal('toggle');
					read();
				}
				else{
					var mensajes = response.errores;
					$.each(mensajes, function(i, val) {
						$('#usuario').find("input[name='"+i+"']").next().html('<div class="error">* '+val+'</div>');
					});
				}
			},
			error: function(jq,status,message) {
		        alert('Error al procesar la solicitud. Status: ' + status + ' - Message: ' + message);
		    }
		});
	});

	$('#modalEliminar').on('show.bs.modal', function(e) {
		var id = $(e.relatedTarget).data('id');
		$('#eliminarUsuario').attr('data-id', id);
	});

	$('#eliminarUsuario').click(function(){
		var id = $(this).attr('data-id');
		$.ajax({
		    url: 'users/drop/'+id,
		    type: 'DELETE',
		    success: function(response) {
		        $('#mensajesUsuario').html(response.message);
		        $('#modalEliminar').modal('toggle');
		        read();
		    }
		});
	});

	$('#modalEditar').on('show.bs.modal', function(e) {
		var id = $(e.relatedTarget).data('id');
		$.get("users/profile/"+id, function(response) {
			var panel = $('#modalEditar');
			if(response.status){
				usuario = response.mensaje;
				$('#id_user').val(id);
				panel.find('#username').val(usuario.userName);
				panel.find('#fullname').val(usuario.fullName);
				panel.find('#email').val(usuario.email);
				panel.find('#website').val(usuario.website);
				panel.find('#about').val(usuario.about);
			}
			else
				perfil.html('<h3>'+response.mensaje+'</h3>');
		});
	});	

	$('#actualizarUsuario').click(function(){
		var user = $('#updateUsuario').serialize();
		var id = $('#id_user').val();
		$.ajax({
			type: "PUT",
			url: "users/update/"+id,
			data: user,
			success: function(response){
				if(response.status){
					$('#mensajesUsuario').html(response.message);
					$('#modalActualizar').modal('toggle');
					read();
				}
				else{
					var mensajes = response.errores;
					$.each(mensajes, function(i, val) {
						$('#updateUsuario').find("input[name='"+i+"']").next().html('<div class="error">* '+val+'</div>');
					});
				}
			},
			error: function(jq,status,message) {
		        alert('Error al procesar la solicitud. Status: ' + status + ' - Message: ' + message);
		    }
		});
	});
});
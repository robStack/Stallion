$(function() {
	$('#guardarUsuario').on("click", function(e){
		e.preventDefault();
		var user = $('#usuario').serialize();
		console.log(user);
	});
});
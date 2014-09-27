<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<a class="navbar-brand" href="#">Stallion</a>
		@if(Auth::check())
			<p class="navbar-text navbar-right"><a href="users/logout">Cerrar sesión</a></p>	
		@else

		@endif
	</div>
</nav>
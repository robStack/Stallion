<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<a class="navbar-brand" href="#">Stallion</a>
		@if(Auth::check())
			<p class="navbar-text navbar-right"><a href="dashboard/logout">Cerrar sesión</a></p>	
		@else

		@endif
	</div>
</nav>
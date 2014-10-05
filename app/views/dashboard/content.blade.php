<ul id="tabContent" class="nav nav-tabs nav-justified" role="tablist">
	<li class="active"><a href="#usuarios" role="tab" data-toggle="tab" data-content="usuarios">Usuarios</a></li>
	<li><a href="#proyectos" role="tab" data-toggle="tab" data-content="proyectos">Proyectos</a></li>
</ul>

<div class="tab-content">
	<div class="tab-pane fade in active" id="usuarios">
		@include('users.dashboard')
	</div>
	<div class="tab-pane fade" id="proyectos">
		proyectos
	</div>
</div>
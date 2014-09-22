@extends('layout.layout')

@section('tasks')
	<h2>User Profile</h2>

	<button id="crear-usuarios" class="btn btn-primary" data-toggle="modal" data-target="#usersModal">
		Crear usuario
	</button>
@stop

@section('read')

	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Usuario</th>
				<th>Email</th>
				<th>Tipo</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $key => $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->username }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->type }}</td>
				<td>
					<button id="verUsuario" type="button" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> Perfil</button>
					<button id="editarUsuario" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Editar</button>
					<button id="eliminarUsuario" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Eliminar</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>


	<div class="modal fade" id="usersModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
					<h4 class="modal-title" id="myModalLabel">Crear usuario</h4>
				</div>
				<div class="modal-body">
					<div id="f1_container">
						<div id="f1_card" class="shadow">
							<div id="frontface" class="front face">
								@if(Session::has('message'))
							        <p class="alert">{{ Session::get('message') }}</p>
							    @endif
								@include('users.create')
							</div>
							<div id="backface" class="back face center invisible">
								
							</div>
						</div>
					</div>	
				    
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button id="guardarUsuario" type="button" class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</div>
	</div>
@stop


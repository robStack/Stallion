@extends('layout.layout')

@section('content')

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
				<td>{{ HTML::link($user->id) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop

@section('tasks')
	<h2>User Profile</h2>

	<a href="users/create"> Crear usuario</a>
@stop
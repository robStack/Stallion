@foreach($users as $key => $user)
<tr class="usuario" name="{{ $user->id }}">
	<td><img src="{{ $user->avatar }}" class="img-responsive img-circle avatar-user" alt="Avatar"></td>
	<td>{{ $user->id }}</td>
	<td>{{ $user->username }}</td>
	<td>{{ $user->email }}</td>
	<td>{{ $user->type }}</td>
	<td class="current-button">
		<i class="glyphicon glyphicon-chevron-down text-muted"></i>
	</td>
</tr>
<tr class="panel-user" style="display: none;">
	<td colspan="6">
		<div class="loader"><img src="{{ asset('assets/img/loader.gif') }}"></div>
		<div class="panel panel-primary invisible">
            <div class="panel-heading">
                <h3 class="panel-title">Perfil de usuario</h3>
            </div>
            <div class="panel-body">
                <div id="perfilUsuario" class="row">
            		<div class="col-md-3 col-lg-3 imagenPerfil"></div>
                    <div id="informacionPerfil" class="col-md-9 col-lg-9">
                        <h3 class="nameUsuario"></h3><br>
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td>Nombre completo</td>
                                    <td class="fullnameUsuario"></td>
                                </tr>
                                <tr>
                                    <td>Correo electrónico</td>
                                    <td class="emailUsuario"></td>
                                </tr>
                                <tr>
                                    <td>Tipo de usuario</td>
                                    <td class="typeUsuario"></td>
                                </tr>
                                <tr>
                                    <td>Sitio web</td>
                                    <td class="urlUsuario"></td>
                                </tr>
                                <tr>
                                	<td>Bio</td>
                                	<td class="aboutUsuario"></td>
                                </tr>
                        	</tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-sm btn-primary" type="button" data-toggle="tooltip" data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button>
                <span class="pull-right">
                <button class="btn btn-sm btn-warning" type="button" data-toggle="modal" data-target="#modalEditar" rel="tooltip" data-original-title="Editar usuario" data-id="{{ $user->id }}"><i class="glyphicon glyphicon-edit"></i></button>
                <button class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#modalEliminar" rel="tooltip" data-original-title="Elminar usuario" data-id="{{ $user->id }}"><i class="glyphicon glyphicon-remove"></i></button>
                </span>
            </div>
        </div>
    </td>
</tr>
@endforeach
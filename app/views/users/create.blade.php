{{ Form::open(array('id' => 'usuario', 'url' => 'users/create', 'class' => 'form-horizontal', 'role' => 'form')) }}
	{{ HTML::ul($errors->all()) }}

	<div class="form-group">
		{{ Form::label('username', 'Usuario', ['class' => 'col-sm-4 control-label']) }}
		<div class="col-sm-6">
			{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
			<div class="errores-usuario"></div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('fullname', 'Nombre completo', ['class' => 'col-sm-4 control-label']) }}
		<div class="col-sm-6">
			{{ Form::text('fullname', Input::old('fullname'), array('class' => 'form-control')) }}
			<div class="errores-usuario"></div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('email', 'Correo electrónico', ['class' => 'col-sm-4 control-label']) }}
		<div class="col-sm-6">
			{{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
			<div class="errores-usuario"></div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('password', 'Contraseña', ['class' => 'col-sm-4 control-label']) }}
		<div class="col-sm-6">
			{{ Form::text('password', Input::old('password'), array('class' => 'form-control')) }}
			<div class="errores-usuario"></div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('password_confirmation', 'Repetir contraseña', ['class' => 'col-sm-4 control-label']) }}
		<div class="col-sm-6">
			{{ Form::text('password_confirmation', Input::old('password_confirmation'), array('class' => 'form-control')) }}
			<div class="errores-usuario"></div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('website', 'Sitio Web', ['class' => 'col-sm-4 control-label']) }}
		<div class="col-sm-6">
			{{ Form::text('website', Input::old('website'), array('class' => 'form-control')) }}
			<div class="errores-usuario"></div>
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('about', 'Bio', ['class' => 'col-sm-4 control-label']) }}
		<div class="col-sm-6">
			{{ Form::text('about', Input::old('about'), array('class' => 'form-control')) }}
			<div class="errores-usuario"></div>
		</div>
	</div>
{{ Form::close() }}
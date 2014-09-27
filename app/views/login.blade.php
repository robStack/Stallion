<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap 101 Template</title>
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="row">
	        <div class="col-sm-1"></div>
	        <div class="col-sm-10">
				<div class="container">
				    @if(Session::has('message'))
				        <p class="alert">{{ Session::get('message') }}</p>
				    @endif
				</div>
				<div>
					{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
					    <h2 class="form-signin-heading">Please Login</h2>
					 	<br />
					    {{ Form::text('username', null, array('class'=>'form-control', 'placeholder'=>'User Name')) }}
					    <br />
					    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
					 	<br />
					    {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
					{{ Form::close() }}
				</div>
	        </div>
	        <div class="col-sm-1"></div>
	    </div>
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>
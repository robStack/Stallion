<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Stallion</title>
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			@include('layout.navbar')
		</div>
		<div class="row">
	        <div class="col-sm-1"></div>
	        <div class="col-sm-10">
	        	<div class="row">
			        <div class="col-sm-3 col-md-4">
			        	{{ $sidebar }}
			        </div>
			        <div class="col-sm-9 col-md-8">
			        	{{ $content }}
			        </div>
			        <div class="col-xs-12">
			        	@include('layout.footer')
			        </div>
			    </div>
	        </div>
	        <div class="col-sm-1"></div>
	    </div>
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>
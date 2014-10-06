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
		<div class="row fill main-row">
	        <div class="col-sm-1"></div>
	        <div class="col-sm-10 fill">
			    <div class="row panel main">
			        <div class="col-sm-2 col-md-3 col-lg-3 sidebar sidebar-left">
			        	{{ $sidebarLeft }}
			        </div>
			        <div class="col-sm-8 col-md-6 col-lg-6 content">
			        	{{ $content }}
			        </div>
			        <div class="col-sm-2 col-md-3 col-lg-3 sidebar sidebar-right">
			        	{{ $sidebarRight }}
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
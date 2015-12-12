<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">

	<title>Totems System</title>

	<!-- CSS -->
	{!! Html::style('css/app.css') !!}
			{!! Html::style('css/admin.css') !!}

			<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	{!! Html::script('js/app.js') !!}

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{!! url('admin/dashboard') !!}">Totems System</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li {!! Request::is('admin/dashboard*') ? 'class="active"' : '' !!}}><a
							href="{!! url('admin/dashboard') !!}">Home</a></li>
				<li {!! Request::is('admin/categories*') ? 'class="active"' : '' !!}}><a
							href="{!! url('admin/categories') !!}">Categories</a></li>
				<li {!! Request::is('admin/stores*') ? 'class="active"' : '' !!}}><a href="{!! url('admin/stores') !!}">Stores</a>
				</li>
				<li {!! Request::is('admin/coupons*') ? 'class="active"' : '' !!}}><a
							href="{!! url('admin/coupons') !!}">Coupons</a></li>
				<li {!! Request::is('admin/totems*') ? 'class="active"' : '' !!}}><a href="{!! url('admin/totems') !!}">Totems</a>
				</li>
				<li {!! Request::is('admin/tags*') ? 'class="active"' : '' !!}}><a
							href="{!! url('admin/tags') !!}">Tags</a></li>
				<li {!! Request::is('admin/people*') ? 'class="active"' : '' !!}}><a href="{!! url('admin/people') !!}">People</a>
				</li>
				<li {!! Request::is('admin/impressions*') ? 'class="active"' : '' !!}}><a
							href="{!! url('admin/impressions') !!}">Used Coupons</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{!! url('auth/logout') !!}">Logout</a></li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</nav>

<!--<div class="container"> -->

@if (session('message'))
	<div class="alert alert-success">
		{{ session('message') }}
	</div>
	@endif
	@yield('content')

			<!-- <</div><!-- /.container -->


</body>
</html>

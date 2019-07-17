<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apple Retailer</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick.css') }}"/>
	<link type="text/css" rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"/>
	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}"/>
	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>
</head>
<body>
	<header>
		<div id="top-header">
			@include('layouts.partials.top_header')
		</div>
		<div id="header">
			@include('layouts.partials.header')
		</div>
	</header>
	<div id="navigation">
		@include('layouts.partials.navigation')
	</div>
	<div id="footer">
		@include('layouts.partials.footer')
	</div>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/slick.min.js') }}"></script>
	<script src="{{ asset('js/nouislider.min.js') }}"></script>
	<script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

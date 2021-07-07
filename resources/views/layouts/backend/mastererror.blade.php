<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<title>:: {{config('app.name')}} :: 404</title>
	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/theme1.css')}}"> </head>

<body class="font-montserrat sidebar_dark">
	<div class="auth">
        @yield('content')

	</div>
	<script src="{{asset('/assets/bundles/lib.vendor.bundle.js')}}"></script>
	<script src="{{asset('/assets/js/core.js')}}"></script>
</body>

</html>

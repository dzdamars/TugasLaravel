<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<title>Laravel 5.4</title>
	{!! html::style('assets2/css/bootstrap.min.css') !!}
</head>
<body>

	@yield('content')
	
	{!! HTML::script('assets2/js/jquery.min.js') !!}
{!! HTML::script('assets2/js/bootstrap.min.js') !!}
</body>
</html>
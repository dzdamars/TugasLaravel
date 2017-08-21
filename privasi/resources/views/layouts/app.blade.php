<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>DzDamar</title>
		<link rel="stylesheet" href="/css/app2.css">
		<link rel="stylesheet" href="/css/custom.css">
		<link rel="stylesheet" href="/css/bootstrap.css">
	<script type="text/javascript" src="/css/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/css/bootstrap.js"></script>
		<link rel="icon" href="/images/kam.jpg">
	</head>
</head>
<body>
	@include('Inc.navbar')
	<div class="container">
	@if(Request::is('/'))
		@include('Inc.showcase')
	@endif
	<div class="row">
		<div class="col-md-8 col-lg-8">
		@include('Inc.messages')
		@yield('content')
		</div>
		<div class="col-md-4 col-lg-4">
		@include('Inc.sidebar')
		</div>
		
	</div>
	</div>
	
	@include('Inc.footer')

</body>
</html>

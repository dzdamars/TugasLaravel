<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Load bootstrap</title>
    <!--  Load css disini, menggunakan blade  -->
    {{ HTML::style('bootstrap-3.2.0-dist/css/bootstrap.min.css') }}
</head>
<body>
    <h1>Hello, world!</h1>
<!--  Load jquery cdn  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--  Load bootstrap.js menggunakan blade  -->
{{ HTML::script('bootstrap-3.2.0-dist/js/bootstrap.min.js') }}
</body>
</html>
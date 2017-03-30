<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	{!! Html::style('assets/bootstrap/css/bootstrap.min.css') !!}
</head>
<body>
	@yield('content')

	{!! Html::script('assets/bootstrap/js/jquery.min.js') !!}
	{!! Html::script('assets/bootstrap/js/bootstrap.min.js') !!}
</body>
</html>
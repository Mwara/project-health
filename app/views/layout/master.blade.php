<!DOCTYPE html>
<html>
<head>
	@yield('css')
	@yield('js')
	<title>@yield('titulo') </title>
</head>
	<body>
	<div id="barra">
		@yield('barra')
	</div>
	<label>@yield('SIMSIV')</label>
	<div>
		@yield('imagen')
	</div>
	</body>
</html>
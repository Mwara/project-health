<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="Shortcut Icon" href="imagenes/logo.ico" type="image/x-icon" />
	@yield('css')
	@yield('js')
	<title>@yield('titulo') </title>
</head>

<body class="has-primary" style="background-color: #fff; height: 100%;">
	@yield('barra')
	@yield('cuerpo')
	@yield('pie')
</body>
</html>
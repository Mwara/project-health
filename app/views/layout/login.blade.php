<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="Shortcut Icon" href="imagenes/logo.ico" type="image/x-icon" />

   <!-- CSS y JS -->
      <link rel="stylesheet" href="{{URL::to('/')}}/css/styles.css" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap-theme.css" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap-theme.css.map" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap-theme.min.css" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.css" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.css.map" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.min.css" />

      <!-- propias-->
      <link rel="stylesheet" href="{{URL::to('/')}}/css/modificador.css" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/login.css" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/stilo.css" />
      <link rel="stylesheet" href="{{URL::to('/')}}/css/tablas.css" />
  
      <script src="{{URL::to('/')}}/js/bootstrap.js"></script>
      <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
      <script src="{{URL::to('/')}}/js/jquery-1.9.1.min.js"></script>
      <script src="{{URL::to('/')}}/js/script.js"></script>
      <script src="http://code.jquery.com/jquery-latest.min.js"></script>

   <!-- fin -->

	@yield('css')
	@yield('js')
	<title>@yield('titulo') </title>
</head>

<body class="has-primary" style="background-color: rgb(142,169,219);">
	@yield('encabezado')
	@yield('formulario')
	@yield('pie')
</body>
</html>

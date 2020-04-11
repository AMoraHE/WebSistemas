<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lab-Cisco</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/Testestilos.css')}}">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://kit.fontawesome.com/13b3d85bca.js" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/Testestilos.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800" rel="stylesheet">
		
</head>
<body>

	<div class="contenedor-logos">

		<img src="{{ asset('img/Gob.png')}}" id="gobierno">
		<img src="{{ asset('img/Educacion.png')}}" id="educacion">
		<img src="{{ asset('img/TecNM.jpg')}}" id="tecnm">
		<img src="{{ asset('img/QRoo.png')}}" id="qroo">
		<img src="{{ asset('img/TecFCP.png')}}" id="fcp">

	</div>


	<div class="divisor">
		@if (Route::has('login'))
    	    <div class="acceso-admin">
        	    @auth
	        	    <a href="{{ url('/home') }}"><label>Acceso Administrador</label></a>
            	@else
	                        
	        	@endauth
	    	</div>
	   	@endif
	</div>

	<header>	
			<nav class="navigation">
				<div class="logo">
					<img src="{{ asset('img/Isc.jpg')}}" id="isc">
				</div>
				<div class="icono" id="icono">
                	<span>&#9776;</span>
         		</div>
				<div class="enlaces uno" id="enlaces">
					<a href="#" class="active">Inicio</a>
					<a href="#">Conócenos</a>
					<a href="#">Infraestructura</a>
					<a href="#">Académicos</a>
					<a href="#">Galería</a>
				</div>			
			</nav>
	</header>

	<main class="main">

		<div class="container">
			
			<h1>Laboratorio Cisco</h1>

			@include('admin.menu-inf.formShow')

		</div>

	</main>

	<footer>
		<p>© Copyright 2020, Todos Los Derechos Reservados</p>
	</footer>

	<script src="Testmain.js"></script>
	
</body>
</html>
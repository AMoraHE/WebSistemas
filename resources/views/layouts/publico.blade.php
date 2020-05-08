<!DOCTYPE html>
<html lang='es'>

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Inicio</title>
  
	  	<script src="https://kit.fontawesome.com/13b3d85bca.js" crossorigin="anonymous"></script>
	  	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-publico.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/elementos-publico.css')}}">

		<!--------------------------------SLIDER---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-slider.css')}}">

		<!--------------------------------MODAL IMG---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal-img.css')}}">

		<!--------------------------------MINI CALENDARIO---------------------------------------->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/calendar-public.css')}}">

		<!--------------------------------CALENDARIO---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.css')}}">

		<!-- Calendario -->

		<script src="{{ asset('js/jquery.min.js')}}"></script>
		<script src="{{ asset('js/moment.min.js')}}"></script>

		<script src="{{ asset('js/fullcalendar.min.js')}}"></script>

		<script src="{{ asset('js/es.js')}}"></script>

		<!-- Menu -->

		<script src="{{ asset('js/headroom.min.js')}}"></script>

		<!-- script Boostrap-->

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
</head>

<body onload="renderDate()"> <!--evento que permite ejecutarse el mini calendario-->

<div class="contenedor-logos">

	<img src="{{ asset('img/Gob.png')}}" id="gobierno">
	<img src="{{ asset('img/Educacion.png')}}" id="educacion">
	<img src="{{ asset('img/TecNM.jpg')}}" id="tecnm">
	<img src="{{ asset('img/QRoo.png')}}" id="qroo">
	<img src="{{ asset('img/TecFCP.png')}}" id="fcp">

</div>

<div class="contenedor">

<!------------------------------------------------------------------ HEADER ---------------------------------------------------------->	

	<header id="header">


		<nav class="menu">
	    	<div class="logo">
	    	<a href="#"><img src="img/Titulo.png" alt=""></a>
	    	<a href="#" class="btn-menu" id="btn-menu"><i class="icono fa fa-bars" aria-hidden="true"></i></a>
	        </div>

	    	<div class="enlaces" id="enlaces">
	    		<a href="{{route('ISC-INICIO')}}"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
	    		<a href="/isc-inicio-noticias"><i class="fa fa-newspaper" aria-hidden="true"></i> Noticias</a>
	    		<a href="/isc-conocenos-perfil_campo_ISC"><i class="fa fa-handshake" aria-hidden="true"></i> Conocenos</a>
	    		<a href="#"><i class="fa fa-school" aria-hidden="true"></i> Infraestructura</a>
	    		<a href="#"><i class="fa fa-chalkboard-teacher" aria-hidden="true"></i> Académicos</a>
	    		<a href="#"><i class="fa fa-image" aria-hidden="true"></i> Galería</a>
	    		<a href="/isc-inicio-contactos"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contactanos</a>
	    	</div>
	    </nav>

	</header>

<!------------------------------------------------------------------ CUERPO ---------------------------------------------------------->	


		<!----------------------------------------------------------- MENU ---------------------------------------------------------->	




		<!----------------------------------------------------------- CONTENEDOR ------------------------------------------------------->


		<div class="contenedor-informacion">

			<!--------------------------------------------------------- SLIDER --------------------------------------------------------->

			@yield('content-slider')						
										
			<!--------------------------------------------------------- INFOR --------------------------------------------------------->
							


			@yield('content')
								


		</div>


<!------------------------------------------------------------------ FOOTER ---------------------------------------------------------->	


<!--	<footer>
		<p>© Copyright 2020, Todos Los Derechos Reservados</p>
	</footer> -->

</div>

	<script src="{{ asset('js/main-public.js')}}"></script>

	<!--------------------------------SLIDER---------------------------------------->

	<script src="{{ asset('js/slider-public.js')}}"></script>

	<!--------------------------------MINI CALENDARIO---------------------------------------->

	<script src="{{ asset('js/calendar-public.js')}}"></script>


</body>

</html>

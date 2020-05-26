<!DOCTYPE html>
<html lang='es'>

<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Sistemas - @yield('title')</title>
  
	  	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	  	<link href='https://fonts.googleapis.com/css?family=Open+Sans|Pacifico' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-publico.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/elementos-publico.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/conocenos-publico.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-infra.css')}}">

		<!--------------------------------ICONOS---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/iconos.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">


		<!--------------------------------SLIDER---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-slider.css')}}">

		<!--------------------------------MODAL IMG---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal-img.css')}}">

		<!--------------------------------MINI CALENDARIO---------------------------------------->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/calendar-public.css')}}">

		<!--------------------------------CALENDARIO---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal-public.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.css')}}">

		<!--------------------------------MODAL IMG---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal-img.css')}}">
		
		<!---------------------------------GALERIA------------------------------------------>
		
		<link rel="stylesheet" type="text/css" href="{{ asset('css/galeria.css')}}">

		<!-----------SCRIPT AJAX --- IMPORTANTE DEBE IR ARRIBA DE TODOS LOS JS-------------->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


		<!-- Galería -->

		<script src="{{ asset('js/galeria.js')}}"></script>
		<script src="{{ asset('js/galeria-animacion.js')}}"></script>

		<!-- Iconos -->

		<script src="{{ asset('js/iconos.js')}}"></script>

		<!-- Calendario -->
		<!--<script src="{{ asset('js/jquery.min.js')}}"></script>-->
		<script src="{{ asset('js/moment.min.js')}}"></script>

		<script src="{{ asset('js/fullcalendar.min.js')}}"></script>

		<script src="{{ asset('js/es.js')}}"></script>

		<!-- Menu -->

		<script src="{{ asset('js/headroom.min.js')}}"></script>

		<!-- Acordeon -->
		<script src="{{ asset('js/acordeon.js')}}"></script>

		<!-- script Boostrap-->

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
</head>

<body onload="renderDate()"> <!--evento que permite ejecutarse el mini calendario-->

<div class="contenedor-header">

	<div class="contenedor-logos">

		<img src="{{ asset('img/Gob.png')}}" id="gobierno">
		<img src="{{ asset('img/Educacion.png')}}" id="educacion">
		<img src="{{ asset('img/TecNM.jpg')}}" id="tecnm">
		<img src="{{ asset('img/QRoo.png')}}" id="qroo">
		<img src="{{ asset('img/TecFCP.png')}}" id="fcp">

	</div>

</div>

<!------------------------------------------------------------------ MENU ---------------------------------------------------------->	

<!--<div class="logo logo_main">Sistemas Computacionales</div>-->
    
    <div class="nav">
        <div class="wrap">
            <div class="logo logo_small">ISC</div>
            <nav>
                <ul>
                    <li><a href="{{route('ISC-INICIO')}}"><i class="icono fas fa-home" aria-hidden="true"></i> Inicio</a></li>
		    		<li><a href="/isc-inicio-noticias"><i class="icono fas fa-newspaper" aria-hidden="true"></i> Noticias</a></li>
		    		<li><a href="/isc-conocenos"><i class="icono fas fa-handshake" aria-hidden="true"></i> Conócenos

					<!--<ul>
						<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-book" aria-hidden="true"></i> Información de la carrera</a></li>
						<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-user-tie" aria-hidden="true"></i> Perfil de la carrera</a></li>
						<li><a href="/isc-conocenos"><i class="icono-izquierda fab fa-searchengin" aria-hidden="true"></i> Líneas de investigación</a></li>
						<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-chalkboard-teacher" aria-hidden="true"></i> Cuerpos académicos</a></li>
						<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-table" aria-hidden="true"></i> Retícula</a></li>
						<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-sitemap" aria-hidden="true"></i> Organigrama</a></li>
					</ul>-->

		    		</a></li>
		    		<li><a href="/isc-infraestructura"><i class="icono fas fa-school" aria-hidden="true"></i> Infraestructura</a></li>
		    		<li><a href="/isc-academicos"><i class="icono fas fa-chalkboard-teacher" aria-hidden="true"></i> Académicos</a></li>
		    		<li><a href="/isc-galeria"><i class="icono fas fa-image" aria-hidden="true"></i> Galería</a></li>
		    		<li><a href="/isc-inicio-contactos"><i class="icono fas fa-envelope" aria-hidden="true"></i> Contáctanos</a></li>
                </ul>
            </nav>
        </div>
    </div>

<div class="contenedor">


<!------------------------------------------------------------------ CUERPO ---------------------------------------------------------->	




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

   	<div class="btn-menu"><i class="fas fa-ellipsis-v"></i></div>


	<script src="{{ asset('js/main-public.js')}}"></script>

	<!--------------------------------SLIDER---------------------------------------->

	<script src="{{ asset('js/slider-public.js')}}"></script>

	<!--------------------------------MINI CALENDARIO---------------------------------------->

	<script src="{{ asset('js/calendar-public.js')}}"></script>


</body>

</html>

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

		<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css')}}">
		<!-- css agregado para slider de infraestructura -->
		<link rel="stylesheet" type="text/css" href="{{ asset('css/estilos-infra.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">
		<script src="{{ asset('js/jquery.min.js')}}"></script>

		<!--------------------------------MODAL IMG---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal-img.css')}}">

		<!--------------------------------ACORDEON---------------------------------------->
		<script src="{{ asset('js/acordeon.js')}}"></script>

		<!--------------------------------CALENDARIO---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.css')}}">

		<!-- Calendario -->

		<script src="{{ asset('js/jquery.min.js')}}"></script>
		<script src="{{ asset('js/moment.min.js')}}"></script>

		<script src="{{ asset('js/fullcalendar.min.js')}}"></script>

		<script src="{{ asset('js/es.js')}}"></script>

		<!-- script Boostrap-->

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
</head>

<body>

<div class="contenedor">

<!------------------------------------------------------------------ HEADER ---------------------------------------------------------->	

	<header>

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
			

			<div class="contenedor-titulo">

				<div class="contenedor-img">

					<img src="{{ asset('img/Isc.jpg')}}" id="isc">

				</div>

				<div class="contenedor-txt">

					<h1>INGENIERÍA EN SISTEMAS COMPUTACIONALES</h1>

				</div>


			</div>

	</header>

<!------------------------------------------------------------------ CUERPO ---------------------------------------------------------->	


		<!----------------------------------------------------------- MENU ---------------------------------------------------------->	


		<nav class="navegacion">
			
			<ul class="menu">
				<li><a href="#"><i class="icono izquierda fa fa-home"></i>Inicio<i class=" icono derecha fa fa-chevron-down"></i></a>
					<ul class="submenu">
						<li><a href="{{route('ISC-INICIO')}}"><i class="icono izquierda fa fa-home"></i>Inicio</a></li>
						<li><a href="/isc-inicio-noticias"><i class="icono izquierda far fa-newspaper"></i>Noticias</a></li>
						<li><a href="/isc-inicio-calendario"><i class="icono izquierda far fa-calendar-alt"></i>Calendario</a></li>
						<li><a href="/isc-inicio-contactos"><i class="icono izquierda far fa-calendar-alt"></i>Contacto</a></li>
					</ul>
				</li>
							
				<li><a href="#"><i class="icono izquierda far fa-handshake"></i>Conócenos<i class=" icono derecha fa fa-chevron-down"></i></a>
					<ul class="submenu">
						<li><a href="/isc-conocenos-MVO"><i class="icono izquierda fas fa-book"></i>Misión, Visión Y Objetivos</a></li>
						<li><a href="/isc-conocenos-perfilIngreso"><i class="icono izquierda fas fa-user-tie"></i>Perfil Ingreso</a></li>
						<li><a href="/isc-conocenos-perfilEgreso"><i class="icono izquierda fas fa-user-graduate"></i>Perfil Egreso</a></li>
						<li><a href="/isc-conocenos-reticula"><i class="icono izquierda fas fa-table"></i>Retícula</a></li>
						<li><a href="/isc-conocenos-lineasInvestigacion"><i class="icono izquierda fab fa-searchengin"></i>Líneas de Investigación</a></li>
						<li><a href="/isc-conocenos-cuerposAcademicos"><i class="icono izquierda fas fa-chalkboard-teacher"></i>Cuerpos Académicos</a></li>
						<li><a href="/isc-conocenos-organigrama"><i class="icono izquierda fas fa-sitemap"></i>Organigrama</a></li>
						<li><a href="/isc-conocenos-campoLaboral"><i class="icono izquierda fas fa-city"></i>Campo de Trabajo</a></li>

					</ul>
				</li>

				<li><a href="#"><i class="icono izquierda fas fa-school"></i>Infraestructura<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul class="submenu">
						<li><a href="/isc-infraestructura-labCisco"><i class="icono izquierda fas fa-hdd"></i>Lab. Cisco</a></li>
						<li><a href="/isc-infraestructura-labSistemas"><i class="icono izquierda fas fa-desktop"></i>Lab. Sistemas</a></li>
						<li><a href="/isc-infraestructura-labMicroprocesadores"><i class="icono izquierda fas fa-microchip"></i>Lab. Microprocesadores</a></li>
						<li><a href="/isc-infraestructura-labCelula"><i class="icono izquierda fas fa-laptop-code"></i>Célula de Desarrollo</a></li>
					</ul>
				</li>

				<li><a href="#"><i class="icono izquierda fas fa-chalkboard-teacher"></i>Académicos<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul class="submenu">
						<li><a href="/isc-academicos-proyectos"><i class="icono izquierda fab fas fa-rocket"></i>Proyectos</a></li>
						<li><a href="/isc-academicos-eventos"><i class="icono izquierda far fa-calendar-check"></i>Eventos</a></li>
						<li><a href="/isc-academicos-convocatorias"><i class="icono izquierda fas fa-file-invoice"></i>Convocatorias</a></li>
						<li><a href="/isc-academicos-programas"><i class="icono izquierda fas fas fa-window-restore"></i>Programas</a></li>
					</ul>
				</li>


				<li><a href="#"><i class="icono izquierda far fa-image"></i>Galería<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul class="submenu">
						<li><a href="/isc-galeria-fotos"><i class="icono izquierda far fa-images"></i>Fotos</a></li>
					</ul>

				</li>
			</ul>
		</nav>

		<!----------------------------------------------------------- CONTENEDOR ------------------------------------------------------->


		<div class="contenedor-informacion">

			<!--------------------------------------------------------- SLIDER --------------------------------------------------------->

			@yield('content-slider')						
										
			<!--------------------------------------------------------- INFOR --------------------------------------------------------->
							

			<div class="contenedor-contenido">

			@yield('content')
								
			</div>


		</div>

		<div class="ir-arriba">
			
			<i class="fas fa-arrow-up"></i>

		</div>


<!------------------------------------------------------------------ FOOTER ---------------------------------------------------------->	


	<footer>
		<p>© Copyright 2020, Todos Los Derechos Reservados</p>
	</footer>

</div>

	<script src="{{ asset('js/main.js')}}"></script>

	<script src="{{ asset('js/jquery.flexslider.js')}}"></script>
	<!-- jquery agregado para slider de infraestructura -->
	 <script src="{{ asset('js/jquery.infraslider.js')}}"></script> 

	<script src="{{ asset('js/slider.js')}}"></script>

</body>

</html>

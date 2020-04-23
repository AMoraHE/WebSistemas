<!DOCTYPE html>
<html lang='es'>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title> Sistemas - @yield('title')</title>

		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/elementos.css')}}">

		<!--------------------------------ICONOS---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/iconos.css')}}">
		<script src="{{ asset('js/iconos.js')}}"></script>

		<!--------------------------------SLIDER---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/flexslider.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}">

		<!--------------------------------CALENDARIO---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.css')}}">

		<!--------------------------------MODAL IMG---------------------------------------->

		<link rel="stylesheet" type="text/css" href="{{ asset('css/modal-img.css')}}">

		<!----------------------------PANTALLA DE CARGA------------------------------------>

		<link rel="stylesheet" type="text/css" href="{{ asset('css/pantalla-carga.css')}}">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

		<!---------------------------------GALERIA------------------------------------------>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/galeria.css')}}">
		<script src="{{ asset('js/galeria.js')}}"></script>
		<script src="{{ asset('js/galeria-animacion.js')}}"></script>
		


	<!-- Calendario -->

		<!--<script src="{{ asset('js/jquery.min.js')}}"></script>-->
		<script src="{{ asset('js/moment.min.js')}}"></script>

		<script src="{{ asset('js/fullcalendar.min.js')}}"></script>

		<script src="{{ asset('js/es.js')}}"></script>

	<!-- Selector Fecha -->

		<script src="{{ asset('js/flatpickr.min.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/flatpickr.min.css')}}">

	<!-- script Boostrap-->

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!-- Alertas de Alertifyjs-->
		<script src="{{ asset('js/alertify.min.js')}}"></script>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/alertify.core.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/alertify.default.css')}}">

</head>

<body>

<div class="contenedor">

<!------------------------------------------------------------------ HEADER ---------------------------------------------------------->

<!------------------------------------------------------------------ CUERPO ---------------------------------------------------------->


		<!----------------------------------------------------------- MENU GRAL ---------------------------------------------------------->


		<div class="contenedor-menu">

			<a href="#page" class="btn-menu">Menu<i class="icono fas fa-bars"></i></a>

			<div class="contenedor-usuario">

				<img src="/images/perfil/{{Auth::user()->perfil_img}}">
				<h3>{{ Auth::user()->name }}</h3>

			</div>

			<ul class="menu">
			
				<!----------------------------------------------------------- MENU USUARIO ---------------------------------------------------------->


				<li><a href="#"><i class="icono izquierda fas fa-user-tie"></i>Sesión<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul>
						
						<li><a href="{{route('perfil-usuario')}}"><i class="icono izquierda fas fa-user-edit"></i>Perfil</a></li>
						
						<li>

							<form id="accion" method="POST" action="{{ route('logout') }}">

							  	@csrf
							  	<button id="logout" texto=" Cerrar Sesión?" class="btn-user"><i class="icono izquierda fas fa-sign-out-alt"></i>Cerrar Sesión</button>

							</form>

						</li>

					</ul>

				</li>

				<!----------------------------------------------------------- MENU ---------------------------------------------------------->

				<li><a href="/admin"><i class="icono izquierda fas fa-home"></i>Home</a></li>

				<li><a href="{{route('slider')}}"><i class="icono izquierda fas fa-laptop-house"></i>Inicio<i class=" icono derecha fa fa-chevron-down"></i></a>
					<ul>
						<li><a href="{{route('slider')}}"><i class="icono izquierda fab fa-slideshare"></i>Slider</a></li>
						<li><a href="{{route('noticias-admin')}}"><i class="icono izquierda far fa-newspaper"></i>Noticias</a></li>
						<li><a href="{{route('calendario')}}"><i class="icono izquierda far fa-calendar-alt"></i>Calendario</a></li>
					</ul>
				</li>

				<li><a href="#"><i class="icono izquierda far fa-handshake"></i>Conócenos<i class=" icono derecha fa fa-chevron-down"></i></a>
					<ul>
						<li><a href="/informacion"><i class="icono izquierda fas fa-book"></i>Misión, Visión Y Objetivos</a></li>
						<li><a href="{{route('perfil-ingreso')}}"><i class="icono izquierda fas fa-user-tie"></i>Perfil Ingreso</a></li>
						<li><a href="{{route('perfil-egreso')}}"><i class="icono izquierda fas fa-user-graduate"></i>Perfil Egreso</a></li>
						<li><a href={{route('reticula')}}><i class="icono izquierda fas fa-table"></i>Retícula</a></li>
						<li><a href="{{route('LineasInvestigacion')}}"><i class="icono izquierda fab fa-searchengin"></i>Líneas de Investigación</a></li>
						<li><a href="/CuerposAcademicos"><i class="icono izquierda fas fa-chalkboard-teacher"></i>Cuerpos Académicos</a></li>
						<li><a href="/Organigrama"><i class="icono izquierda fas fa-sitemap"></i>Organigrama</a></li>
						<li><a href="{{route('CampoLaboralIndex')}}"><i class="icono izquierda fas fa-city"></i>Campo de Trabajo</a></li>

					</ul>
				</li>

				<li><a href="#"><i class="icono izquierda fas fa-school"></i>Infraestructura<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul>
						<li><a href="/Lab-Cisco"><i class="icono izquierda fas fa-hdd"></i>Lab. Cisco</a></li>
						<li><a href="/Lab-Sistemas"><i class="icono izquierda fas fa-desktop"></i>Lab. Sistemas</a></li>
						<li><a href="/Lab-Micro"><i class="icono izquierda fas fa-microchip"></i>Lab. Microprocesadores</a></li>
						<li><a href="/Lab-Celula"><i class="icono izquierda fas fa-laptop-code"></i>Célula de Desarrollo</a></li>
					</ul>
				</li>

				<li><a href="#"><i class="icono izquierda fas fa-chalkboard-teacher"></i>Académicos<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul>
						<li><a href="{{route('ProyectosAcademicos')}}"><i class="icono izquierda fab fas fa-rocket"></i>Proyectos</a></li>
						<li><a href="{{route('EventosAcademicos')}}"><i class="icono izquierda far fa-calendar-check"></i>Eventos</a></li>
						<li><a href="/ConvocatoriasAcademicos"><i class="icono izquierda fas fa-file-invoice"></i>Convocatorias</a></li>
						<li><a href="ProgramasAcademicos"><i class="icono izquierda fas fas fa-window-restore"></i>Programas</a></li>
					</ul>
				</li>


				<li><a href="#"><i class="icono izquierda far fa-image"></i>Galería<i class=" icono derecha fa fa-chevron-down"></i></a>

					<ul>
						<li><a href="/Album-Index"><i class="icono izquierda far fa-images"></i>Fotos</a></li>
					</ul>

				</li>

			</ul>

		</div>

		<!----------------------------------------------------------- CONTENEDOR ------------------------------------------------------->


		<div class="contenedor-informacion">

			<!--------------------------------------------------------- HEADER --------------------------------------------------------->
			<div class="contenedor-header">
				

				<div class="contenedor-logos">

					<img src="{{ asset('img/Gob.png')}}" id="gobierno">
					<img src="{{ asset('img/Educacion.png')}}" id="educacion">
					<img src="{{ asset('img/TecNM.jpg')}}" id="tecnm">
					<img src="{{ asset('img/QRoo.png')}}" id="qroo">
					<img src="{{ asset('img/TecFCP.png')}}" id="fcp">

				</div>

			<!--------------------------------------------------------- DIVISOR --------------------------------------------------------->


				<div class="divisor"></div>

			<!--------------------------------------------------------- TITULO ISC --------------------------------------------------------->

				<div class="contenedor-titulo">

					<div class="contenedor-img">

						<a href="/admin"><img src="{{ asset('img/Isc.jpg')}}" id="isc"></a>

					</div>

					<div class="contenedor-txt">

						<h1>INGENIERÍA EN SISTEMAS COMPUTACIONALES</h1>

					</div>

				</div>


			</div>
			

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


</div>

<!------------------------------------------------------------------ FOOTER ---------------------------------------------------------->


<!--<div class="contenedor-footer">
		
		<p>© Copyright 2020, Todos Los Derechos Reservados</p>

</div>-->


<!----------------------------------------------------------------- LOADER ---------------------------------------------------------->

<div id="contenedor-loader">

	<div class="loader" id="loader">Loading...</div>

</div>


	<script src="{{ asset('js/main.js')}}"></script>
<!--<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->

	<script src="{{ asset('js/select.js')}}"></script>

	<!--<script src="{{ asset('js/modal.js')}}"></script>-->
	<script src="{{ asset('js/msj-confirmacion.js')}}"></script>

<!--<script src="{{ asset('js/jquery-3.1.0.min.js')}}"></script>-->
	<script src="{{ asset('js/jquery.flexslider.js')}}"></script>

	<script src="{{ asset('js/slider.js')}}"></script>

</body>

</html>
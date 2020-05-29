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
<div class="contenedor-menu" id="contenedor-menu">

 <nav class="menu">
 	<div class="contenedor">
 		<div class="lista-menu justify-content-between align-items-center">
 			<div class="logo-menu">
 				<a href="#" class="titulo-menu">
 					Sistemas Computacionales
 				</a>
 			</div>
 			<button class="menu-nav-toggle">
 				<span></span>
 			</button>
 			<div class="menu-nav">
 				<ul>
 					<li><a href="{{route('ISC-INICIO')}}"><i class="icono fas fa-home"></i> Inicio</a></li>
		    		<li><a href="/isc-inicio-noticias"><i class="icono fas fa-newspaper"></i> Noticias</a></li>
					<li class="dropdown">
						<a href="#/isc-conocenos" class="sub-menu-toggle"><i class="icono fas fa-handshake"></i> Conócenos<i class="icono-derecha fas fa-chevron-down"></i></a>

						<ul class="sub-menu">
							<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-book"></i> Información de la carrera</a></li>
							<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-user-tie"></i> Perfil de la carrera</a></li>
							<li><a href="/isc-conocenos"><i class="icono-izquierda fab fa-searchengin"></i> Líneas de investigación</a></li>
							<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-chalkboard-teacher"></i> Cuerpos académicos</a></li>
							<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-table"></i> Retícula</a></li>
							<li><a href="/isc-conocenos"><i class="icono-izquierda fas fa-sitemap"></i> Organigrama</a></li>
						</ul>

		    		</li>

					<li><a href="/isc-infraestructura"><i class="icono fas fa-school" aria-hidden="true"></i> Infraestructura</a></li>
		    		<li><a href="/isc-academicos"><i class="icono fas fa-chalkboard-teacher" aria-hidden="true"></i> Académicos</a></li>
		    		<li><a href="/isc-galeria"><i class="icono fas fa-image" aria-hidden="true"></i> Galería</a></li>
		    		<li><a href="/isc-inicio-contactos"><i class="icono fas fa-envelope" aria-hidden="true"></i> Contáctanos</a></li>
 				</ul>
 			</div>
 		</div>
 	</div>
 </nav>

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


	<footer>

		<div class="contenedor-footer">
        
            <div class="contenedor-cuerpo-footer">

                <div class="columna1">
                    <h1>Información de la escuela</h1>

                    <p>Somos una institución que franquea alumnos :v capturamos EmOssielNorlax y ayudamos a nuestros alumnos a desarrollar su capacidad y los volvemos maestros puchamones...</p>

                    <div class="footer-logo-contenedor">                  	
                   
	                    <div class="footer-logo">

	                    	<img src="/img/Logo-Footer.png">          
	                    	
	                    </div>

                     </div>


                </div>

                <div class="columna2">

                    <h1>Redes Sociales</h1>

                    <div class="redes-sociales">
                        <img src="/icon/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="redes-sociales">
                        <img src="/icon/twitter.png">
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="redes-sociales">
                        <img src="/icon/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>
                    <div class="redes-sociales">
                        <img src="/icon/google-plus.png">
                        <label>Siguenos en Google Plus</label>
                    </div>
                    <div class="redes-sociales">
                        <img src="/icon/pinterest.png">
                        <label>Siguenos en Pinteres</label>
                    </div>


                </div>

                <div class="columna3">

                    <h1>Contactos</h1>

                    <div class="contactos-footer">
                        <div class="icono"><i class="fas fa-school"></i></div>
                        <label>Carretera Vigía Chico Km 1.5, C.P. 77200, Felipe Carrillo Puerto, Quintana Roo, México</label>
                    </div>

                    <div class="contactos-footer">
                        <div class="icono"><i class="fas fa-phone"></i></div>
                        <label>834-00-51, 267-10-48</label>
                    </div>

                    <div class="contactos-footer">
                        <div class="icono"><i class="fas fa-envelope"></i></div>
                         <label>direccion@itscarrillopuerto.edu.mx </label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="contenedor-footer-barra">
               <div class="footer">
                    <div class="copyright">
                        © 2020 Todos los Derechos Reservados | <a href="">ISC</a>
                    </div>

                    <div class="informacion-footer">
                        <a href="">Conócenos</a> | <a href="">Contáctanos</a>
                    </div>
                </div>

            </div>

	</footer>

</div>

	<script src="{{ asset('js/main-public.js')}}"></script>

	<!--------------------------------SLIDER---------------------------------------->

	<script src="{{ asset('js/slider-public.js')}}"></script>

	<!--------------------------------MINI CALENDARIO---------------------------------------->

	<script src="{{ asset('js/calendar-public.js')}}"></script>


</body>

</html>

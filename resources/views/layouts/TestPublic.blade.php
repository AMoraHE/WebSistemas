<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lab-Cisco</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/test-publico.css')}}">
  
	<script src="https://kit.fontawesome.com/13b3d85bca.js" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' >
	<link rel="stylesheet" type="text/css" href="css/test-publico.css">

	<link rel="stylesheet" href="css/nivo-slider.css">
		
</head>
<body>

	<div class="contenedor-logos">

		<img src="{{ asset('img/Gob.png')}}" id="gobierno">
		<img src="{{ asset('img/Educacion.png')}}" id="educacion">
		<img src="{{ asset('img/TecNM.jpg')}}" id="tecnm">
		<img src="{{ asset('img/QRoo.png')}}" id="qroo">
		<img src="{{ asset('img/TecFCP.png')}}" id="fcp">

	</div>


	{{-- Menu --}}
	<header class="header">
		<div class="cont-menu logo-nav-container">
			
			{{-- <nav class="navigation">
				<ul class="menu">
					<li><a href=""><i class="icono izquierda fa fa-home"></i> Inicio <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="submenu">
							<li><a href="#"><i class="icono izquierda fa fa-home"></i>Inicio</a></li>
							<li><a href="#"><i class="icono izquierda far fa-newspaper"></i>Noticias</a></li>
							<li><a href="#"><i class="icono izquierda far fa-calendar-alt"></i>Calendario</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="icono izquierda far fa-handshake"></i> Conócenos <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="submenu">
							<li><a href="#"><i class="icono izquierda fas fa-book"></i>Misión, Visión Y Objetivos</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-user-tie"></i>Perfil Ingreso</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-user-graduate"></i>Perfil Egreso</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-table"></i>Retícula</a></li>
							<li><a href="#"><i class="icono izquierda fab fa-searchengin"></i>Líneas de Investigación</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-chalkboard-teacher"></i>Cuerpos Académicos</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-sitemap"></i>Organigrama</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-city"></i>Campo de Trabajo</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="icono izquierda fas fa-school"></i> Infraestructura <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="submenu">
							<li><a href="#"><i class="icono izquierda fas fa-hdd"></i>Lab. Cisco</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-desktop"></i>Lab. Sistemas</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-microchip"></i>Lab. Microprocesadores</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-laptop-code"></i>Célula de Desarrollo</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="icono izquierda fas fa-chalkboard-teacher"></i> Académicos <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="submenu">
							<li><a href="#"><i class="icono izquierda fab fas fa-rocket"></i>Proyectos</a></li>
							<li><a href="#"><i class="icono izquierda far fa-calendar-check"></i>Eventos</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-file-invoice"></i>Convocatorias</a></li>
							<li><a href="#"><i class="icono izquierda fas fas fa-window-restore"></i>Programas</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="icono izquierda far fa-image"></i> Galería <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="submenu">
							<li><a href="#"><i class="icono izquierda far fa-images"></i>Fotos</a></li>
						</ul>
					</li>
				</ul>			
			</nav> --}}

			<nav class="navigation">
				<span class="menu-icon">Ver Mas</span>
				<ul class="">
					<li><a href=""><i class="icono izquierda fa fa-home"></i> Inicio <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="">
							<li><a href="#"><i class="icono izquierda fa fa-home"></i>Inicio</a></li>
							<li><a href="#"><i class="icono izquierda far fa-newspaper"></i>Noticias</a></li>
							<li><a href="#"><i class="icono izquierda far fa-calendar-alt"></i>Calendario</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="icono izquierda far fa-handshake"></i> Conócenos <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="">
							<li><a href="#"><i class="icono izquierda fas fa-book"></i>Misión, Visión Y Objetivos</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-user-tie"></i>Perfil Ingreso</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-user-graduate"></i>Perfil Egreso</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-table"></i>Retícula</a></li>
							<li><a href="#"><i class="icono izquierda fab fa-searchengin"></i>Líneas de Investigación</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-chalkboard-teacher"></i>Cuerpos Académicos</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-sitemap"></i>Organigrama</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-city"></i>Campo de Trabajo</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="icono izquierda fas fa-school"></i> Infraestructura <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="">
							<li><a href="#"><i class="icono izquierda fas fa-hdd"></i>Lab. Cisco</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-desktop"></i>Lab. Sistemas</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-microchip"></i>Lab. Microprocesadores</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-laptop-code"></i>Célula de Desarrollo</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="icono izquierda fas fa-chalkboard-teacher"></i> Académicos <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="">
							<li><a href="#"><i class="icono izquierda fab fas fa-rocket"></i>Proyectos</a></li>
							<li><a href="#"><i class="icono izquierda far fa-calendar-check"></i>Eventos</a></li>
							<li><a href="#"><i class="icono izquierda fas fa-file-invoice"></i>Convocatorias</a></li>
							<li><a href="#"><i class="icono izquierda fas fas fa-window-restore"></i>Programas</a></li>
						</ul>
					</li>
					<li><a href="#"><i class="icono izquierda far fa-image"></i> Galería <i class=" icono derecha fa fa-chevron-down"></i></a>
						<ul class="">
							<li><a href="#"><i class="icono izquierda far fa-images"></i>Fotos</a></li>
						</ul>
					</li>
				</ul>			
			</nav>

			<div class="">
				@if (Route::has('login'))
    	    		<div class="acceso-admin">
        	    		@auth
	        	   			<a href="{{ url('/home') }}"><label>Acceso Administrador</label></a>
            			@else
	                        
	        			@endauth
	    			</div>
	   			@endif
			</div>
		</div>
	</header>

	<main class="main">

		@foreach ($infras as $infra)

		{{-- <header id="logos">
			<div class="textos">
				<img src="/images/infra/{{$infra->imgInicio}}" alt="{{$infra->imgInicio}}">
				<h1>Laboratorio Cisco</h1>
			</div>
		</header> --}}

		<div class="conteniendo" style="background: url('/images/infra/{{$infra->imgInicio}}');">
			<div class="capa-gradient"></div>
			<div class="container-details">
				<div class="details">
					<h1>Laboratorio Cisco</h1>
				</div>
			</div>
		</div>
		
		<div class="informacion">
			<div class="formulario">
				<h2>Responsable</h2>
				<label value="">{{$infra->responsable}}</label>
				<h2>Correo Electrónico</h2>
				<label>{{$infra->correo}}</label>
				<h2>Descripción:</h2>
				<label>{{$infra->descripcion}}</label>
				<div class="btn-item">
   					<a href="#" class="btn-ghost blue secundary round" >Ver Fotos</a>
 				</div>
			</div>	
		@endforeach
		</div>

			@foreach ($imagenes as $imagen)
				<!-- Swiper -->
				<div class="slider-wrapper theme-mi-slider">
					<div id="slider" class="nivoSlider">     
		    			<img src="/images/infra/{{$imagen->imagen}}" alt="" title="#htmlcaption1" />    
		    			<img src="/images/infra/{{$imagen->imagen}}" alt="" title="#htmlcaption2" />     
					</div> 
				<div id="htmlcaption1" class="nivo-html-caption">     
		    		<h1>Sean Bienvenidos</h1>
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div> 
			@endforeach

	</main>


	<footer>
		<p>© Copyright 2020, Todos Los Derechos Reservados</p>
	</footer>
	
	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('js/testMain.js')}}"></script>

 
 <!-- Swiper JS -->
 	<script src="js/jquery.nivo.slider.js"></script>

	<script type="text/javascript"> 
		$(window).on('load', function() {
		    $('#slider').nivoSlider(); 
		}); 
	</script>
</body>
</html>
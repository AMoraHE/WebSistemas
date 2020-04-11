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

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">

	<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.min.css')}}">
	
		
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
			</div>	
		@endforeach
		</div>


				@foreach ($imagenes as $imagen)		
			<div class="slider">
			  <div class="slide_viewer">
			    <div class="slide_group">
			      <div class="slide">

							<img src="/images/infra/{{$imagen->imagen}}">
			      </div>
			      <div class="slide">
			      </div>
			      <div class="slide">
			      </div>
			      <div class="slide">
			      </div>
			    </div>
			  </div>
			</div><!-- End // .slider -->

			<div class="slide_buttons">
			</div>

			<div class="directional_nav">
			  <div class="previous_btn" title="Previous">
			    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
			      <g>
			        <g>
			          <path fill="#474544" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
						c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z"/>
			          <path fill="#474544" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z"/>
			        </g>
			      </g>
			    </svg>
			  </div>
			  <div class="next_btn" title="Next">
			    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65px" height="65px" viewBox="-11 -11.5 65 66">
			      <g>
			        <g>
			          <path fill="#474544" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z"/>
			          <path fill="#474544" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z"/>
			        </g>
			      </g>
			    </svg>
			  </div>
			</div><!-- End // .directional_nav -->
			@endforeach
	</main>


	<footer>
		<p>© Copyright 2020, Todos Los Derechos Reservados</p>
	</footer>
	
	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('js/testMain.js')}}"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
  	$('.slider').each(function() {
  var $this = $(this);
  var $group = $this.find('.slide_group');
  var $slides = $this.find('.slide');
  var bulletArray = [];
  var currentIndex = 0;
  var timeout;
  
  function move(newIndex) {
    var animateLeft, slideLeft;
    
    advance();
    
    if ($group.is(':animated') || currentIndex === newIndex) {
      return;
    }
    
    bulletArray[currentIndex].removeClass('active');
    bulletArray[newIndex].addClass('active');
    
    if (newIndex > currentIndex) {
      slideLeft = '100%';
      animateLeft = '-100%';
    } else {
      slideLeft = '-100%';
      animateLeft = '100%';
    }
    
    $slides.eq(newIndex).css({
      display: 'block',
      left: slideLeft
    });
    $group.animate({
      left: animateLeft
    }, function() {
      $slides.eq(currentIndex).css({
        display: 'none'
      });
      $slides.eq(newIndex).css({
        left: 0
      });
      $group.css({
        left: 0
      });
      currentIndex = newIndex;
    });
  }
  
  function advance() {
    clearTimeout(timeout);
    timeout = setTimeout(function() {
      if (currentIndex < ($slides.length - 1)) {
        move(currentIndex + 1);
      } else {
        move(0);
      }
    }, 4000);
  }
  
  $('.next_btn').on('click', function() {
    if (currentIndex < ($slides.length - 1)) {
      move(currentIndex + 1);
    } else {
      move(0);
    }
  });
  
  $('.previous_btn').on('click', function() {
    if (currentIndex !== 0) {
      move(currentIndex - 1);
    } else {
      move(3);
    }
  });
  
  $.each($slides, function(index) {
    var $button = $('<a class="slide_btn">&bull;</a>');
    
    if (index === currentIndex) {
      $button.addClass('active');
    }
    $button.on('click', function() {
      move(index);
    }).appendTo('.slide_buttons');
    bulletArray.push($button);
  });
  
  advance();
});
  </script>
</body>
</html>
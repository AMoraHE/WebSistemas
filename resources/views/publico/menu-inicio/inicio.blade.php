@extends('layouts.publico')

@section('title', 'Inicio')


@section('content-slider')

<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->

<div class="contenedor-slider">

<div class="slider">

				<div class="slide current">

					<img src="/img/Isc-logo.png" alt="">

			        <div class="content">
			          <h1>Ingeniería en Sistemas Computacionales</h1>
			          <p>
			            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit hic
			            maxime, voluptatibus labore doloremque vero!
			          </p>
			        </div>
			    </div>
			@foreach ($sliders as $slider)

				<div class="slide">

					<img src="/images/slider/{{$slider->image}}" alt="">

			        <div class="content">
			          <h1>Titulo - Slider</h1>
			          <p>
			            {{$slider->contenido}}
			          </p>
			        </div>
			      </div>
			
			@endforeach

</div>

	<div class="buttons">
	    <button id="prev"><i class="fas fa-arrow-left"></i></button>
	    <button id="next"><i class="fas fa-arrow-right"></i></button>
	</div>

</div>
@endsection


@section('content')

<!----------------------------------------------------------------- NOTICIA ---------------------------------------------------------->


<div class="seccion-principal">

	<div class="contenedor-descripcion">

		<div class="contenedor-descripcion-txt">
			
			<h3>Acerca de la Carrera</h3>
			<p>es una carrera muy interesante porque te franquean rapido :v Formar profesionistas líderes con visión estratégica y amplio sentido ético; capaz de diseñar, desarrollar, implementar y administrar tecnología computacional para aportar soluciones innovadoras en beneficio de la sociedad; en un contexto global, multidisciplinario y sostenible.</p>

		</div>
		
	</div>


<div class="contenedor-dividido">

@foreach ($noticias as $noticia)
	
	@if($loop->first)

	<div class="contenedor-noticia-1">
		
		<div class="contenedor-titulo-seccion">

			<h3>{{$noticia->titulo}}</h3>

		</div>

		<div class="contenedor-seccion-dividido-noticia-1">
		

				<div class="contenedor-img-contenido">

					<img src="/images/news/{{$noticia->newimage}}">

					<div class="seccion-fecha-noticia">

						<p>{{$noticia->created_at}}</p>

					</div>

				</div>

				<div class="contenedor-cuerpo-txt">

					<p>{{$noticia->redaccion}}</p>

					<div class="seccion-continuacion">

						<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticiasVerInd/{{$noticia->id}}"><button class="btn-leer"><span>Leer Más...</span></button></a>
						
					</div>

				</div>

		</div>

	</div>

	@endif

@endforeach

<!------------------------------------------------------------- CALENDARIO ---------------------------------------------------------->

	<div class="mini-calendario">
		<div class="contenedor-mini-calendario">
	        <div class="calendario-public">
	            <div class="month">
	                <div class="prev" onclick="moveDate('prev')">
	                    <span>&#10094;</span>
	                </div>
	                <div>
	                    <h2 id="month"></h2>
	                    <p id="year"></p>
	                </div>
	                <div class="next" onclick="moveDate('next')">
	                    <span>&#10095;</span>
	                </div>
	            </div>
	            <a href="/isc-inicio-calendario">

		            <div class="weekdays">
		                <div>Dom</div>
		                <div>Lun</div>
		                <div>Mar</div>
		                <div>Mie</div>
		                <div>Jue</div>
		                <div>Vie</div>
		                <div>Sab</div>
		            </div>
		            <div class="days">

		            </div>

	        	</a>
	        </div>
    	</div>
	</div>

</div>


<!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->


	<div class="contenedor-previsualizar-seccion">

		<div class="contenedor-titulo-seccion-mas">

			<h3>Noticias Recientes</h3>

		</div>			

		@foreach ($noticias as $noticia)

		<div class="contenedor-seccion-noticias-preliminar">
				
			<div class="contenedor-seccion-preliminar">


				<div class="contenedor-seccion-preliminar-img">

					<img src="/images/news/{{$noticia->newimage}}">


					<div class="seccion-fecha-noticia mas">

						<p>{{$noticia->created_at}}</p>

					</div>

				</div>

				<div class="contenedor-cuerpo-txt-preliminar">

					<p>{{$noticia->titulo}}</p>

				</div>

				<div class="contenedor-botones">

					<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticiasVerInd/{{$noticia->id}}"><button class="btn mas"><span>Leer Más...</span></button></a>
				
				</div>

			</div>

		</div>
		
		@endforeach

<!----------------------------------------------------------------- BOTONES VER MAS ---------------------------------------------------------->

		<div class="contenedor-botones">

			<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticias"><button class="btn ver centrado"><span>Ver Más Noticias</span></button></a>

		</div>

	</div>

<!------------------------------------------------------------- IMG PARALLAX ---------------------------------------------------------

<div class="contenedor-img-parallax">

    <div class="img-parallax">
     <div class="proyectos">
       <h1>Nuestros Proyectos</h1>
       <hr>
       <p>Proyectos realizados por alumnos de la ingeniería en sistemas computacionales</p>
       <button>Ver proyectos</button>
     </div>       
    </div>

    <div class="skew-abajo"></div>

</div> -->


<!------------------------------------------------------------- Proyectos ---------------------------------------------------------->

   <!-- Nuestros proyectos -->
   <section class="our-projects">
      <div class="skew-arriba"></div>
   <div class="deg-background"></div>
   
   <div class="ejeZproject">
      <div class="container-project">
        <div class="project-title">
          <h2>Nuestros Proyectos</h2>
          <hr>
        </div>
          <div class="project-img">

          	@foreach($proyectos as $proyecto)

          	<div class="contenedor-img-proyecto">
          		
          	

            	<img src="/images/proyectos/{{$proyecto->newimage}}" alt="">

            	<div class="hover-galeria">
                    <img src="/img/icono1.png" alt="">
                    <p>{{$proyecto->proyecto}}</p>
                </div>

            </div>

            @endforeach
            

         </div>
   <!--<div class="skew-abajo"></div>-->
   </section>

</div>


@endsection

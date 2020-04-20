@extends('layouts.publico')

@section('title', 'Inicio')


@section('content-slider')

<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->

<div class="contenedor-slider">

	<div class="seccion-principal">

		<div class="flexslider">

			<ul class="slides">

			@foreach ($sliders as $slider)

				<li>
					<img src="/images/slider/{{$slider->image}}" alt="">
					
					<section class="caption">

						<h2>{{$slider->contenido}}</h2>

					</section>
				</li>
			
			@endforeach


			</ul>
		
		</div>

	</div>

</div>

@endsection


@section('content')

<!----------------------------------------------------------------- NOTICIA ---------------------------------------------------------->


<div class="seccion-principal">

@foreach ($noticias as $noticia)
	
	@if($loop->first)

	<div class="contenedor-titulo-seccion">
		<div class="tlinea"></div>

		<h3>Noticia</h3>

		<div class="tlinea"></div>

	</div>

	<div class="contenedor-cuerpo-dividido-inicio">

		<div class="contenedor-img-dividido-inicio">

			<img src="/images/news/{{$noticia->newimage}}">

		</div>

		<div class="titulo-img-n1">
			<h2>{{$noticia->titulo}}</h2>
			</div>

		<div class="contenedor-texto-dividido-inicio">

			<p>{{$noticia->redaccion}}</p>

		</div>

		<div class="contenedor-botones">

			<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticiasVerInd/{{$noticia->id}}"><button class="btn ver"><span>Leer Más...</span></button></a>
		
		</div>

	</div>

	@endif

@endforeach



<!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->


	<div class="contenedor-previsualizar-seccion">

		<div class="contenedor-titulo-seccion">
			<div class="tlinea"></div>

			<h3>Más Noticias</h3>

			<div class="tlinea"></div>

		</div>

		@foreach ($noticias as $noticia)
				
		<div class="contenedor-seccion-preliminar">


			<div class="contenedor-seccion-preliminar-img-redimensionales">

				<img src="/images/news/{{$noticia->newimage}}">

			</div>

			<div class="titulo-img">
			<h2>{{$noticia->titulo}}</h2>
			</div>

		</div>
		
		@endforeach

<!----------------------------------------------------------------- BOTONES VER MAS ---------------------------------------------------------->

		<div class="contenedor-botones">

			<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticias"><button class="btn ver"><span>Ver Más...</span></button></a>
		
		</div>

	</div>

</div>


@endsection

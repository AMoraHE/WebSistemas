@extends('layouts.administrador')

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

		<div class="contenedor-botones">

			<a class="msj" mesanje="editar los slider?" href="/slider"><button class="btn editar"><span>Editar</span></button></a>

		</div>

	</div>

</div>

@endsection


@section('content')

<!----------------------------------------------------------------- NOTICIA ---------------------------------------------------------->


<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1>PÁGINA PRINCIPAL</h1>
    
  	</div>

@foreach ($noticias as $noticia)
	
	@if($loop->first)

	<div class="contenedor-componentes-principales">

		<div class="contenedor-titulo-seccion">

			<h3>{{$noticia->titulo}}</h3>

		</div>

		<div class="contenedor-cuerpo-dividido">

			<div class="contenedor-img-dividido">

				<img src="/images/news/{{$noticia->newimage}}">

			</div>

			<div class="contenedor-texto-dividido">

				<p>{{$noticia->redaccion}}</p>

			</div>

		</div>

	</div>

<!----------------------------------------------------------------- BOTONES NOTICIAS ---------------------------------------------------------->

	<div class="contenedor-botones">

		<a class="msj" mesanje="eliminar la noticia?" href="/noticias-admin-eliminar/{{$noticia->slug}}"><button class="btn eliminar"><span>Eliminar</span></button></a>
		<a class="msj" mesanje="editar la noticia?" href="/noticias-admin/{{$noticia->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>


	</div>

	@endif

@endforeach



<!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->


	<div class="contenedor-previsualizar-seccion">

		<div class="contenedor-titulo-seccion">

			<h3>Más Noticias</h3>

		</div>

		@foreach ($noticias as $noticia)
				
		<div class="contenedor-seccion-preliminar">

			<div class="contenedor-seccion-preliminar-img-redimensionales">

				<img src="/images/news/{{$noticia->newimage}}">

			</div>

			<h2>{{$noticia->titulo}}</h2>

		</div>
		
		@endforeach

<!----------------------------------------------------------------- BOTONES VER MAS ---------------------------------------------------------->

		<div class="contenedor-botones">

			<a class="msj" mesanje="ver más noticias?" href="/noticias-admin"><button class="btn ver"><span>Ver Más...</span></button></a>
		
		</div>

	</div>

</div>


@endsection

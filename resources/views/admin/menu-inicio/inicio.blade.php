@extends('layouts.administrador')

@section('title', 'Inicio')


@section('content-slider')

	<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->



				<!------------------------------------------------------- Slider ---------------------------------------------------->
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

				<a onclick="return confirm('¿Desea editar el slider?')" href="/slider"><button class="btn"><span>Editar</span></button></a>

					</div>

				</div>

			</div>




@endsection


@section('content')

	<!----------------------------------------------------------------- NOTICIA N1 ---------------------------------------------------------->


	<div class="seccion-principal">
	@foreach ($noticias as $noticia)
		@if($loop->first)

		<div class="contenedor-titulo-seccion">

				<h3>{{$noticia->titulo}}</h3>

		</div>

		<div class="contenedor-cuerpo-noticia">

				<div class="contenedor-img-noticia">

					<img src="/images/news/{{$noticia->newimage}}">

				</div>

				<div class="contenedor-texto">

					<p>{{$noticia->redaccion}}</p>

				</div>

		</div>

		<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea eliminar esta noticia?')"><button class="btn"><span>Eliminar</span></button></a>
		<a onclick="return confirm('¿Desea eeditar esta noticia?')"><button class="btn"><span>Editar</span></button></a>


		</div>
	@endif
	@endforeach



<!------------------------------------------------------------- NOTICIAS MÁS ---------------------------------------------------------->


		<div class="contenedor-previsualizar-seccion">

			<div class="contenedor-titulo-seccion">

				<h3>Más Noticias</h3>

			</div>

			@foreach ($noticias as $noticia)
				<div class="contenedor-seccion-preliminar">

					<div class="contenedor-seccion-preliminar-noticia-img">

						<img src="/images/news/{{$noticia->newimage}}">

					</div>

					<h2>{{$noticia->titulo}}</h2>

				</div>
			@endforeach



			<div class="contenedor-botones-ver">

		<a onclick="return confirm('¿Desea ver más noticias?')" href="/noticias-admin">
			<button class="btn centrado">
				<span>Ver Más...</span>
			</button>
		</a>
			</div>

		</div>

	</div>


@endsection

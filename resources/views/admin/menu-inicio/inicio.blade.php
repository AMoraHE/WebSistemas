@extends('layouts.administrador')

@section('title', 'Inicio')


@section('content-slider')

<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->

<div class="contenedor-slider">

<div class="slider">

				<div class="slide current">

					<!-- <img src="/img/Isc-logo.png" alt=""> -->
					<img src="/img/academicos.png" alt="">

			        <div class="content">
			          <h1>Ingeniería en Sistemas Computacionales</h1>
			          <p>
			            aqui va el txt del primero
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

	<div class="contenedor-botones">

		<a class="msj" mesanje="editar los slider?" href="/slider"><button class="btn editar m-derecha"><span>Editar</span></button></a>

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

			<div class="contenedor-img-dividido hover-img">

			<!---------------------------------- MODAL IMG -------------------------------------------->

				<a href="#modal-img{{$noticia->id}}">

					<img src="/images/news/{{$noticia->newimage}}">
					<span><i class="fas fa-expand"></i></span>
				
				</a>


			</div>

				<div class="modal-img" id="modal-img{{$noticia->id}}">

					<a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
					<img src="/images/news/{{$noticia->newimage}}" />

								
				</div>

			<!---------------------------------- FIN MODAL IMG -------------------------------------------->

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

			<div class="contenedor-seccion-preliminar-img-redimensionales hover-img">

			<!---------------------------------- MODAL IMG -------------------------------------------->

				<a href="#modal-img{{$noticia->id}}">

					<img src="/images/news/{{$noticia->newimage}}">
					<span><i class="fas fa-expand"></i></span>
				
				</a>

			</div>

				<div class="modal-img" id="modal-img{{$noticia->id}}">

					<a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
					<img src="/images/news/{{$noticia->newimage}}" />

							
				</div>

			<!---------------------------------- FIN MODAL IMG -------------------------------------------->			

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

@extends('layouts.publico')

@section('title', 'Noticia individual')

@section('content')

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

<!----------------------------------------------------------------- NOTICIAS----------------------------------------------------------------------------->


	<div class="contenedor-noticias-individuales">

		<div class="contenedor-titulo-seccion-ind">

			<h3>{{$noticias->titulo}}</h3>

		</div>


			<div class="contenedor-img-dividido hover-img">

			<!---------------------------------- MODAL IMG -------------------------------------------->

				<a href="#modal-img{{$noticias->id}}">

					<img src="/images/news/{{$noticias->newimage}}">
					<span><i class="fas fa-expand"></i></span>
				
				</a>


			</div>

				<div class="modal-img" id="modal-img{{$noticias->id}}">

					<a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
					<img src="/images/news/{{$noticias->newimage}}" />

								
				</div>

			<!---------------------------------- FIN MODAL IMG -------------------------------------------->

			<div class="contenedor-texto-dividido">

				@foreach(explode(PHP_EOL, $noticias->redaccion) as $parrafo)
				<p>{{$parrafo}}</p>
				@endforeach

			</div>

			<div class="contenedor-botones">

				<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticias"><button class="btn"><span>Regresar</span></button></a>
		
			</div>


	</div>

<!-------------------------------------------------------------- BOTONES NOTICIAS----------------------------------------------------------------------------->

</div>

@endsection

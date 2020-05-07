@extends('layouts.publico')

@section('title', 'Noticia individual')

@section('content')

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

		<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->

	<div class="contenedor-img-parallax">

	    <div class="img-parallax">
	     <div class="parallax">


	     </div>       
	    </div>

	    <div class="skew-abajo"></div>

	</div> 

	<!----------------------------------------------------------------- NOTICIAS----------------------------------------------------------------------------->
	<div class="contenedor-secciones"> 


		<div class="contenedor-noticias-individuales">

			<div class="contenedor-titulo-seccion-ind">

				<h3>{{$noticias->titulo}}</h3>

			</div>


				<div class="contenedor-img-noticia-ind">

				<!---------------------------------- MODAL IMG -------------------------------------------->

					<div class="skew-arriba"></div>

					<a href="#modal-img{{$noticias->id}}">

						<img src="/images/news/{{$noticias->newimage}}">

					</a>

					<div class="skew-abajo"></div>

				</div>

					<div class="modal-img" id="modal-img{{$noticias->id}}">

						<a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
						<img src="/images/news/{{$noticias->newimage}}" />

									
					</div>

				<!---------------------------------- FIN MODAL IMG -------------------------------------------->

				<div class="redaccion-noticia-ind">

					@foreach(explode(PHP_EOL, $noticias->redaccion) as $parrafo)
					<p>{{$parrafo}}</p>
					@endforeach

				</div>

				<div class="contenedor-botones">

					<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticias"><button class="btn"><span>Regresar</span></button></a>
			
				</div>


		</div>

	</div>

</div>

@endsection

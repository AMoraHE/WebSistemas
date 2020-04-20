@extends('layouts.publico')

@section('title', 'Noticia individual')

@section('content')

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1></h1>
    
  	</div>

	

<!----------------------------------------------------------------- BUSCADOR NOTICIAS ------------------------------------------------------------------->


<!----------------------------------------------------------------- NOTICIAS----------------------------------------------------------------------------->


	<div class="contenedor-componentes-principales">

		<div class="contenedor-titulo-seccion">

			<h3>{{$noticias->titulo}}</h3>

		</div>

		<div class="contenedor-cuerpo-dividido">

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

				<p>{{$noticias->redaccion}}</p>

			</div>

			<div class="contenedor-botones">

			<a class="msj" mesanje="ver más noticias?" href="/isc-inicio-noticias"><button class="btn ver"><span>Regresar...</span></button></a>
		
		</div>

		</div>

	</div>

<!-------------------------------------------------------------- BOTONES NOTICIAS----------------------------------------------------------------------------->

</div>

@endsection

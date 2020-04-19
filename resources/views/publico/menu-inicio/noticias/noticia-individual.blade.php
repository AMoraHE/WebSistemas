@extends('layouts.publico')

@section('title', 'Noticia individual')

@section('content')

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1>NOTICIA</h1>
    
  	</div>

	

<!----------------------------------------------------------------- BUSCADOR NOTICIAS ------------------------------------------------------------------->

	<div class="contenedor-buscador">

		<div class="buscador">

        	<form  files = "true" method="GET" action="/buscador-noticias" enctype="multipart/form-data">
          		@csrf

          		<div class="formulario">

					<input type="search" name="key" placeholder="Noticia">
					<button type="submit" class="btn-buscar"><span><i class="icono izquierda fas fa-search"></i></span></button>


				</div>

			</form>

		</div>

	</div>

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

		</div>

	</div>

<!-------------------------------------------------------------- BOTONES NOTICIAS----------------------------------------------------------------------------->

</div>

@endsection

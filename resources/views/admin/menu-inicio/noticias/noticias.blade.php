@extends('layouts.administrador')

@section('title', 'Noticias')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1>NOTICIAS</h1>
    
  	</div>

	<div class="contenedor-botones">

		<a class="msj" mesanje="entrar a eliminación anual?" href="/noticias-admin/eliminacion-anual/"><button class="btn eliminar"><span>Eliminación Anual</span></button></a>
		<a class="msj" mesanje="agregar más noticias?" href="/noticias-admin/create"><button class="btn agregar"><span>Agregar Noticia</span></button></a>
		<!-- <a class="msj" mesanje="regresar al menú de inicio?" href="/admin"><button class="btn cancelar"><span>INICIO</span></button></a> -->

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

	@foreach ($noticias as $noticia)

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

				@foreach(explode(PHP_EOL, $noticia->redaccion) as $parrafo)
				<p>{{$parrafo}}</p>
				@endforeach

			</div>

		</div>

	</div>

<!-------------------------------------------------------------- BOTONES NOTICIAS----------------------------------------------------------------------------->

	<div class="contenedor-botones">
		<a class="msj" mesanje="eliminar la noticia?" href="/noticias-admin-eliminar/{{$noticia->slug}}"><button type="submit" class="btn eliminar"><span>Eliminar</span></button></a>
	  	<a class="msj" mesanje="editar la noticia?" href="/noticias-admin/{{$noticia->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>

	</div>

	@endforeach

	<div id="paginas">
			{{$noticias->links()}}
	</div>

</div>

@endsection

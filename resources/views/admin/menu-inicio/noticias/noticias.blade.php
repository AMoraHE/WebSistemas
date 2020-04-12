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

	<div class="contenedor-botones">

		<a class="msj" mesanje="entrar a eliminación anual?" href="/noticias-admin/eliminacion-anual/"><button class="btn eliminar"><span>Eliminación Anual</span></button></a>
		<a class="msj" mesanje="agregar más noticias?" href="/noticias-admin/create"><button class="btn agregar"><span>Agregar Noticia</span></button></a>

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

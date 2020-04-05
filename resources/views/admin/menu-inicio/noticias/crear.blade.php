@extends('layouts.administrador')

@section('title', 'Agregar Noticia')

@section('content')

<!----------------------------------------------------------------- NOTICIAS --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Crear Noticias</h3>

	</div>

  	<form class="form-goup"  files = "true" method="POST" action="/noticias-admin" enctype="multipart/form-data">
    @csrf

<!----------------------------------------------------------------- FORMULARIO NOTICIAS ----------------------------------------------------------------------------->

	<div class="formulario">

		<label>Título</label>
		<input type="text" name="titulo" id="titulo" value="" placeholder="Inserte Titulo Deseado" class="form-control" required>

	</div>

<!----------------------------------------------------------------- IMG NOTICIAS----------------------------------------------------------------------------->

	<div class="formulario">

 		<label>Tamaño de imagen recomendado: 250px de ancho y 250px de alto</label>

 	</div>

	<div class="contenedor-cargar-img">

		<div class="contenedor-txt-seccion">

			<label>Cargar IMG</label>

		</div>

		<div class="contenedor-boton-cargar">

			<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i>Subir Archivo</label>

			<input id="file-upload" onchange='cambiar()' name="image" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

		</div>

		<div class="contenedor-img-seccion">

 			<img id="img-pre" src="/img/LogoNuevaImagen.png">

 		</div>

	</div>

	<div id="info-img">No se Eligió Archivo</div>

<!----------------------------------------------------------------- FORMULARIO NOTICIAS----------------------------------------------------------------------------->

	<div class="formulario">

		<label>Descripción Noticia</label>
		<textarea style="height: 500px;" name="redaccion" placeholder="Inserte Descripción Deseada ... " required></textarea>

	</div>

<!----------------------------------------------------------------- BOTONES NOTICIAS----------------------------------------------------------------------------->

	<div class="contenedor-botones">

 		<a onclick="return confirm('¿Desea guardar la nueva noticia?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
 		<a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/noticias-admin"><button type="button" class="btn"><span>Cancelar</span></button></a>
              
	</div>

  </form>

</div>

@endsection

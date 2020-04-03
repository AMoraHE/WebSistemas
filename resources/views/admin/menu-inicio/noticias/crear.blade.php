@extends('layouts.administrador')

@section('title', 'Agregar Noticia')

@section('content')

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Crear Noticias</h3>

	</div>

  <form class="form-goup"  files = "true" method="POST" action="/noticias-admin" enctype="multipart/form-data">

    @csrf

		<div class="formulario">

			<label for="">Título</label>

			<input type="text" name="titulo" id="titulo" value="" placeholder="Inserte Titulo Deseado" class="form-control" required>

		</div>

		<div class="formulario">

 			<label for="">Tamaño de imagen recomendado: 250px de ancho y 250px de alto</label>

 		</div>

		<div class="contenedor-cargar-img">

			<div class="contenedor-txt-seccion">

				<label for="">Cargar IMG</label>

			</div>

			<div class="contenedor-boton-cargar">

			<label for="file-upload" class="subir"><i class="fas fa-cloud-upload-alt"></i>Subir Archivo</label>

			<input id="file-upload" onchange='cambiar()' name="image" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

				<div id="info-img">No se Eligió Archivo</div>

			</div>

			<div class="contenedor-img-seccion">

 				<img id="img-pre" src="/img/LogoNuevaImagen.png">

 			</div>

		</div>

		<div class="formulario">

			<label for="">Descripción Noticia</label>

			<textarea style="height: 500px;" name="redaccion" placeholder="Inserte Descripción Deseada ... " required></textarea>

		</div>

		<div class="contenedor-botones">

 			<a onclick="return confirm('¿Desea guardar la nueva noticia?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
 			<a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/noticias-admin"><button type="button" class="btn"><span>Cancelar</span></button></a>
              
		</div>

  </form>

</div>

@endsection

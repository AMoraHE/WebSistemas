@extends('layouts.administrador')

@section('title', 'Crear proyectos')

@section('content')

<!----------------------------------------------------------------- AGREGAR PROYECTOS ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Agregar - Proyecto</h3>

	</div>

<!----------------------------------------------------------------- CARGRA IMG PROYECTOS ---------------------------------------------------------->

	<form id="formulario" class="form-goup"  files = "true" method="POST" action="/ProyectosAcademicos" enctype="multipart/form-data" >
	@csrf

	<div class="formulario">

 		<label>Tamaño mínimo de la imagen recomendado: 1100 x 450 pixeles. Tamaño máximo del archivo: 1MB.</label>

 	</div>

	<div class="contenedor-cargar-img">

		<div class="contenedor-txt-seccion">
            
        	<label>Seleccionar imagen</label>

      	</div>

		<div class="contenedor-boton-cargar">

			<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i>Subir Imágen</label>

			<input id="file-upload" onchange='cambiar()' name="imagen" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

		</div>

		<div class="contenedor-img-seccion-rectangular">

 			<img id="img-pre" src="/img/LogoNuevaImagenGrande.png">

 		</div>

	</div>

	<div id="info-img">No se eligió archivo</div>

	@if ($errors->has('imagen'))

      <span class="invalid-feedback" role="alert">

      	<strong>{{$errors->first('imagen')}}</strong>
        <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong> -->

      </span>

    @endif

<!----------------------------------------------------------------- FORMULARIO PROYECTOS ---------------------------------------------------------->

	<!-----------------------------Aplicación------------------------

	<div class="formulario">

		<label>Aplicación</label>
		<input type="text" name="aplicacion" id="aplicacion" value="{{old('aplicacion')}}" placeholder="Nombre del prototipo" class="form-control" required>

		@if ($errors->has('aplicacion'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('aplicacion') }}</strong>

      		</span>

    	@endif

	</div>	
 ---------------->
		

   <!-----------------------------Proyecto------------------------>

	<div class="formulario">

		<label>Proyecto</label>
		<input type="text" name="proyecto" id="proyecto" value="{{old('proyecto')}}" placeholder="Nombre del proyecto" class="form-control" required>

	</div>

		@if ($errors->has('proyecto'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('proyecto') }}</strong>

      		</span>

    	@endif


   <!----------------------------------DESARROLLADORES---------------->

   <div class="formulario">

		<label>Desarrolladores</label>
		<input type="text" name="desarrolladores" placeholder="Ingrese los desarrolladores, Ejem: osiel canul, erick herrera, etc, etc" required>{{old('desarrolladores')}}</input>

	</div>

		@if ($errors->has('desarrolladores'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('desarrolladores') }}</strong>

      		</span>

    	@endif


    <!------------------------------DESCRIPCION-------------------------->


    <div class="formulario">

		<label>Descripción</label>
		<textarea class="RichText" name="descripcion" placeholder="descripcion" required>{{old('descripcion')}}</textarea>

	</div>

		@if ($errors->has('descripcion'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('descripcion') }}</strong>

      		</span>

    	@endif


<!----------------------------------------------------------------- BOTONES PROYECTOS ---------------------------------------------------------->

	<div class="contenedor-botones">

		<a id="save" texto="guardar el nuevo proyecto?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
 		<a class="msj" mesanje="cancelar?" href="/ProyectosAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
	

	</div>

</form>

</div>
	
@endsection
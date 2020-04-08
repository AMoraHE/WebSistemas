@extends('layouts.administrador')

@section('title', 'Crear proyectos')

@section('content')

<!----------------------------------------------------------------- AGREGAR PROYECTOS ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Proyectos</h3>

	</div>

<!----------------------------------------------------------------- CARGRA IMG PROYECTOS ---------------------------------------------------------->

	<form class="form-goup"  files = "true" method="POST" action="/ProyectosAcademicos" enctype="multipart/form-data" >
	@csrf

	<div class="formulario">

 		<label>Tamaño de imagen recomendado: 1100px de ancho y 450px de alto</label>

 	</div>

	<div class="contenedor-cargar-img">

		<div class="contenedor-txt-seccion">
            
        	<label>Cargar IMG</label>

      	</div>

		<div class="contenedor-boton-cargar">

			<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i>Subir Imágen</label>

			<input id="file-upload" onchange='cambiar()' name="imagen" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

		</div>

		<div class="contenedor-img-seccion">

 			<img id="img-pre" src="/img/LogoNuevaImagen.png">

 		</div>

	</div>

	<div id="info-img">No se Eligió Archivo</div>

	@if ($errors->has('imagen'))

      <span class="invalid-feedback" role="alert">

        <strong>{{ $errors->first('imagen') }}</strong>

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

		@if ($errors->has('proyecto'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('proyecto') }}</strong>

      		</span>

    	@endif

	</div>	

   <!----------------------------------DESARROLLADORES---------------->

   <div class="formulario">

		<label>Desarrolladores</label>
		<input type="text" name="desarrolladores" placeholder="Ingrese los desarrolladores, Ejem: osiel canul, erick herrera, etc, etc" required>{{old('desarrolladores')}}</input>

		@if ($errors->has('desarrolladores'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('desarrolladores') }}</strong>

      		</span>

    	@endif

	</div>	

    <!-----------------------------------OBJETIVO----------------------

    <div class="formulario">

		<label>Objetivo</label>
		<textarea name="objetivo" placeholder="objetivo" required>{{old('objetivo')}}</textarea>

		@if ($errors->has('objetivo'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('objetivo') }}</strong>

      		</span>

    	@endif

	</div>	

--------->
    <!------------------------------DESCRIPCION-------------------------->


    <div class="formulario">

		<label>Descripción</label>
		<textarea name="descripcion" placeholder="descripcion" required>{{old('descripcion')}}</textarea>

		@if ($errors->has('descripcion'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('descripcion') }}</strong>

      		</span>

    	@endif

	</div>	

    <!--------------------------------RESULTADOS--------------------


    <div class="formulario">

		<label>Resultados</label>
		<textarea name="resultados" placeholder="resultados" required>{{old('resultados')}}</textarea>

		@if ($errors->has('resultados'))

      		<span class="invalid-feedback" role="alert">

        		<strong>{{ $errors->first('resultados') }}</strong>

      		</span>

    	@endif

	</div>	

	--------->

<!----------------------------------------------------------------- BOTONES PROYECTOS ---------------------------------------------------------->

	<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea guardar el nuevo proyecto?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
 		<a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/ProyectosAcademicos"><button type="button" class="btn"><span>Cancelar</span></button></a>
	

	</div>

</form>

</div>
	
@endsection
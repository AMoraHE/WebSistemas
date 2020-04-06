@extends('layouts.administrador')

@section('title', 'Crear proyectos')

@section('content')

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Proyectos</h3>

	</div>

	<!----------------------------IMAGEN----------------------->

	<form class="form-goup"  files = "true" method="POST" action="/ProyectosAcademicos" enctype="multipart/form-data" >
	@csrf

	<div class="formulario">

 		<label>Tamaño de imagen recomendado: 250px de ancho y 250px de alto</label>

 	</div>

	<div class="contenedor-cargar-img">

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
	<!----------------------------------------------- APLICACION------------------------------------------------>

	


	<div class="formulario">
		<label>Aplicación</label>
		<input type="text" name="aplicacion" id="aplicacion" value="{{old('aplicacion')}}" placeholder="Nombre del prototipo" class="form-control" required>
	</div>	

		@if ($errors->has('aplicacion'))
      		<span class="invalid-feedback" role="alert">
        		<strong>{{ $errors->first('aplicacion') }}</strong>
      		</span>
    	@endif

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
		<textarea style="height: 100px; " name="desarrolladores" placeholder="Desarrolladores" required>{{old('desarrolladores')}}</textarea>

	</div>	

		@if ($errors->has('desarrolladores'))
      		<span class="invalid-feedback" role="alert">
        		<strong>{{ $errors->first('desarrolladores') }}</strong>
      		</span>
    	@endif

    <!-----------------------------------OBJETIVO---------------------->

    <div class="formulario">

		<label>Objetivo</label>
		<textarea style="height: 100px; " name="objetivo" placeholder="objetivo" required>{{old('objetivo')}}</textarea>

	</div>	

		@if ($errors->has('objetivo'))
      		<span class="invalid-feedback" role="alert">
        		<strong>{{ $errors->first('objetivo') }}</strong>
      		</span>
    	@endif


    <!------------------------------DESCRIPCION-------------------------->


    <div class="formulario">

		<label>Descripción</label>
		<textarea style="height: 100px; " name="descripcion" placeholder="descripcion" required>{{old('descripcion')}}</textarea>

	</div>	

		@if ($errors->has('descripcion'))
      		<span class="invalid-feedback" role="alert">
        		<strong>{{ $errors->first('descripcion') }}</strong>
      		</span>
    	@endif

    <!--------------------------------RESULTADOS--------------------->


    <div class="formulario">

		<label>Resultados</label>
		<textarea style="height: 100px; " name="resultados" placeholder="resultados" required>{{old('resultados')}}</textarea>

	</div>	

		@if ($errors->has('resultados'))
      		<span class="invalid-feedback" role="alert">
        		<strong>{{ $errors->first('resultados') }}</strong>
      		</span>
    	@endif


	<!-------------------------------------------------BOTONES--------------------------------------------------->

	<div class="contenedor-botones">

		<a onclick="return confirm('¿Desea guardar el nuevo proyecto?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
 		<a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/ProyectosAcademicos"><button type="button" class="btn"><span>Cancelar</span></button></a>
	

	</div>

</form>

</div>
	
@endsection
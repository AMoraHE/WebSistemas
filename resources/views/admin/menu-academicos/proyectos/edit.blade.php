@extends('layouts.administrador')

@section('title', 'Editar proyecto')

@section('content')

<!----------------------------------------------------------------- EDITAR PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">
	<div class="contenedor-titulo-seccion">
		<h3>Modificar - Proyectos</h3>
	</div>

<!---------------------------PROYECTOS------------------------>
 <form id="formulario" class="form-goup" files="true" method="POST" action="/ProyectosAcademicos/{{$proyecto->slug}}" enctype="multipart/form-data">
    @method('PUT')
    {{csrf_field()}}

<!----------------------------IMAGEN------------------------->
	<div class="formulario">

    <label>Tamaño mínimo de la imagen recomendado: 1100 x 450 pixeles. Tamaño máximo del archivo: 1MB.</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-txt-seccion">
            
      <label>Seleccionar imagen</label>

    </div>


    <div class="contenedor-boton-cargar">

      <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i>Subir Imágen</label>

      <input id="file-upload" onchange='cambiar()' name="image" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    </div>

    <div class="contenedor-img-seccion-rectangular">

      <img id="img-pre" src="/images/proyectos/{{$proyecto->newimage}}">

    </div>

  </div>

  <div id="info-img">No se eligió archivo</div>

  @if ($errors->has('image'))

    <span class="invalid-feedback" role="alert">

      <strong>{{$errors->first('image')}}</strong>
      <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong> -->

    </span>

  @endif

<!----------------------------------------------------------------- FORMULARIO PROYECTOS ---------------------------------------------------------->

<!--------------------------PROYECTO---------------------------->
  <div class="formulario">

    <label>Proyecto</label>
    @if ($errors->any())
    <input type="text" name="proyecto" id="proyecto" value="{{old('proyecto')}}" placeholder="Reescriba el proyecto seleccionado" class="form-control" required>
    @else
    <input type="text" name="proyecto" id="proyecto" value="{{$proyecto->proyecto}}" placeholder="Reescriba el proyecto seleccionado" class="form-control" required>
    @endif

  </div>

  @if ($errors->has('proyecto'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('proyecto') }}</strong>

    </span>

  @endif

<!------------------------------DESARROLLADORES-------------------------->
 <div class="formulario">

    <label>Desarrolladores</label>
    @if ($errors->any())
    <input type="text" name="desarrolladores" id="desarrolladores" value="{{old('desarrolladores')}}" placeholder="Ingrese los desarrolladores, Ejem: osiel canul, erick herrera, etc, etc" class="form-control" required>
    @else
    <input type="text" name="desarrolladores" id="desarrolladores" value="{{$proyecto->desarrolladores}}" placeholder="Ingrese los desarrolladores, Ejem: osiel canul, erick herrera, etc, etc" class="form-control" required>
    @endif

  </div>

  @if ($errors->has('desarrolladores'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('desarrolladores') }}</strong>

    </span>

  @endif

<!---------------------------DESCRIPCION---------------------------------------------------->
  <div class="formulario">

    <label>Descripción</label>
    @if ($errors->any())
    <textarea class="RichText" placeholder="Reescriba la descripción seleccionada" name="descripcion" required>{{old('descripcion')}}</textarea>
    @else
    <textarea class="RichText" placeholder="Reescriba la descripción seleccionada" name="descripcion" required>{{$proyecto->descripcion}}</textarea>
    @endif

  </div>

  @if ($errors->has('descripcion'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('descripcion') }}</strong>

    </span>

  @endif

<!----------------------------------------------------------------- BOTONES PROYECTOS ---------------------------------------------------------->

	<div class="contenedor-botones">
		<a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit" ><span>Guardar</span></button></a>
    <a class="msj" mesanje="cancelar?" href="/ProyectosAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
	
	</div>
</form>
</div>

@endsection
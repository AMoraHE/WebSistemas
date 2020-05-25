@extends('layouts.administrador')

@section('title', 'Agregar Slider')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->

	<form id="formulario" class="form-goup" files="true" method="POST" action="/slider" enctype="multipart/form-data">
  @csrf

<!----------------------------------------------------------------- FORMULARIO SLIDER ---------------------------------------------------------->

  <div class="formulario">

    <label>Título</label>
    <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="Inserte El Título Deseado" class="form-control" required>

  </div>

  @if ($errors->has('titulo'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('titulo') }}</strong>
    </span>
  @endif

  <div class="formulario">

  	<label>Descripcion</label>
  	<input type="text" name="contenido" id="descripcion" value="{{old('contenido')}}" placeholder="Inserte La Descripción Deseada" class="form-control" required>

  </div>

  @if ($errors->has('contenido'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('contenido') }}</strong>
    </span>
  @endif

<!----------------------------------------------------------------- IMG SLIDER ---------------------------------------------------------->

  <div class="formulario">

    <label>Tamaño mínimo de la imagen recomendado: 1100 x 450 pixeles. Tamaño máximo del archivo: 1MB.</label>
        
  </div>

  <div class="contenedor-cargar-img">

  	<div class="contenedor-txt-seccion">

  		<label>Seleccionar imagen</label>

  	</div>

  	<div class="contenedor-boton-cargar">

  		<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
  		<input id="file-upload" name="image" value="/img/slider/" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

  	</div>


  	<div class="contenedor-img-seccion-rectangular">

  		<img id="img-pre" src="/img/LogoNuevaImagenGrande.png">

  	</div>


  </div>

  <div id="info-img">No se eligió archivo</div>

  @if ($errors->has('image'))
      <span class="invalid-feedback" role="alert">

        <strong>{{$errors->first('image')}}</strong>
        <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong> -->
      </span>
    @endif

<!----------------------------------------------------------------- BOTONES SLIDER ---------------------------------------------------------->

  <div class="contenedor-botones">

  	<a id="save"  texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>

  </div>

  </form>

<!------------------------------------------------------------- PREVISUALIZACIÓN SLIDER ---------------------------------------------------------->


  <div class="contenedor-previsualizar-seccion">

  	<div class="contenedor-titulo-seccion">

  		<h3>Previsualización</h3>

  	</div>

    @foreach ($sliders as $slider)

  	<div class="contenedor-seccion-preliminar">

      <div class="contenedor-seccion-preliminar-img-redimensionales">

  			<img src="/images/slider/{{$slider->image}}">

      </div>

  		<h2>{{$slider->titulo}}</h2>

  	</div>

    @endforeach

  </div>

<!------------------------------------------------------- BOTONES PREVISUALIZACIÓN SLIDER ---------------------------------------------------------->

  <div class="contenedor-botones">

    <a class="msj" mesanje="cancelar?" href="/slider"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
    
  </div>

</div>

@endsection

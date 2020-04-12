@extends('layouts.administrador')

@section('title', 'Editar Slider')

@section('content')

<div class="seccion-principal">

<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion-select">

    <h3>Editar Slider</h3>

<!----------------------------------------------------- SELECT SLIDER -------------------------------------------------------------->

    <div class="contenedor-select-seccion">
              
      <select name="slider_id" id ="slider" class="seleccion" onchange="top.location.href = this.options[this.selectedIndex].value">

        <option value="">--Elija el slider--</option> 

        @foreach ($slidersG as $sliderG)

        @php
        $var = $sliderG->id
        @endphp

        <option value="{{route('filtrarslider', ['id' => $var])}}">Slider - {{$sliderG->id}}</option>

        @endforeach

      </select>
      <i></i>
    
    </div>

  </div>

<!----------------------------------------------------------------- FORMULARIO SLIDER ---------------------------------------------------------->

  <form id="formulario" class="form-goup" files="true" method="POST" action="/slider/{{$slider->slug}}" enctype="multipart/form-data">
      @method('PUT')
      @csrf

  	<div class="formulario">

  		<label for="">Título</label>
      @if ($errors->any())
  		<input type="text" name="contenido" id="titulo" value="{{old('contenido')}}" placeholder="Inserte Titulo Deseado" class="form-control" required>
      @else
      <input type="text" name="contenido" id="titulo" value="{{$slider->contenido}}" placeholder="Inserte Titulo Deseado" class="form-control" required>
      @endif

  	</div>

    @if ($errors->has('contenido'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('contenido') }}</strong>
      </span>
    @endif

<!----------------------------------------------------------------- IMG SLIDER ------------------------------------------------------------------>

    <div class="formulario">

      <label for="">Tamaño de imagen recomendado: 1100px de ancho y 450px de alto</label>
        
    </div>

  	<div class="contenedor-cargar-img">

  		<div class="contenedor-txt-seccion">

  			<label for="">Cargar IMG:</label>

  		</div>

  		<div class="contenedor-boton-cargar">

  			<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
  			<input id="file-upload" name="image" value="/images/slider/{{$slider->image}}" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;'/>

  		</div>


  		<div class="contenedor-img-seccion">

  			<img id="img-pre" src="/images/slider/{{$slider->image}}">

  		</div>

  	</div>

    <div id="info-img">No se Eligió Archivo</div>

    @if ($errors->has('image'))
      <span class="invalid-feedback" role="alert">
        <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong>
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

    @foreach ($slidersG as $sliderG)

  	<div class="contenedor-seccion-preliminar">

      <div class="contenedor-seccion-preliminar-img-redimensionales">

  			<img src="/images/slider/{{$sliderG->image}}">

      </div>

  		<h2>{{$sliderG->contenido}}</h2>

  	</div>

    @endforeach

  </div>

<!----------------------------------------------------------------- BOTONES SLIDER ---------------------------------------------------------->

  <div class="contenedor-botones">

    <a class="msj" mesanje="cancelar?" href="/slider"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

  </div>
  
</div>

@endsection

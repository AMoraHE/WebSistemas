@extends('layouts.administrador')

@section('title', 'Editar Encabezado')

@section('content')

<div class="seccion-principal">

  <div class="contenedor-titulo-seccion">

    <h3>Editar Encabezado Principal</h3>
    
  </div>

  <form id="formulario" class="form-goup" files="true" method="POST" action="/headerC/{{$header->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

  	<div class="formulario">

      <label>Título</label>
      @if ($errors->any())
  		<input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="Inserte El Título Deseado" class="form-control" required>
      @else
      <input type="text" name="titulo" id="titulo" value="{{$header->titulo}}" placeholder="Inserte El Título Deseado" class="form-control" required>
      @endif

  	</div>

    @if ($errors->has('titulo'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('titulo') }}</strong>
      </span>
    @endif

    <div class="formulario">

      <label>Tamaño mínimo de la imagen recomendado: 1100 x 450 pixeles. Tamaño máximo del archivo: 1MB.</label>
        
    </div>

  	<div class="contenedor-cargar-img">

  		<div class="contenedor-txt-seccion">

  			<label>Seleccionar imagen</label>

  		</div>

  		<div class="contenedor-boton-cargar">

  			<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
  			<input id="file-upload" name="img" value="" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;'/>

  		</div>


  		<div class="contenedor-img-seccion-rectangular">

  			<img id="img-pre" src="/images/header/{{$header->img}}">

  		</div>

  	</div>

    <div id="info-img">No se eligió archivo</div>

    @if ($errors->has('img'))
      <span class="invalid-feedback" role="alert">

        <strong>{{$errors->first('img')}}</strong>

      </span>
    @endif

  		<div class="contenedor-botones">

  			<a id="save"  texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
        <a class="msj" mesanje="cancelar?" href="/admin-header"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

  		</div>

  </form>
  
</div>

@endsection

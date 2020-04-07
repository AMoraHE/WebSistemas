@extends('layouts.administrador')

@section('title', 'Agregar Imágenes')

@section('content')

<div class="seccion-principal">

  <div class="contenedor-titulo-seccion">
  
      <h3>Celula de Desarrollo de Software</h3>

  </div>

  <!------------------------------------------------------------- INFORMACIÓN ---------------------------------------------------------->

  <form class="form-group" files = "true" method="POST" action="/Img-Lab-Cisco" enctype="multipart/form-data">
        @csrf

      <div class="formulario">

        <label for="">Tamaño de imagen recomendado: 250px de ancho y 250px de alto</label>
        
      </div>

  		<div class="contenedor-cargar-img">

  				<div class="contenedor-txt-seccion">

  					<label for="">Cargar IMG</label>

  				</div>

  				<div class="contenedor-boton-cargar">

  					<label for="file-upload" class="subir">
  						<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
  					</label>

  					<input id="file-upload" name="image" value="" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

  				</div>


  				<div class="contenedor-img-seccion">

  					<img id="img-pre" src="/img/LogoNuevaImagen.png">

  				</div>


  		</div>

      <div id="info-img">No se Eligió Archivo</div>

      @if ($errors->has('image'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('image') }}</strong>
        </span>
      @endif


  		<div class="contenedor-botones">

  			<a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

        <a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/Lab-Cisco"><button type="button" class="btn"><span>Cancelar</span></button></a>

  		</div>

    </form>

</div>	

@endsection
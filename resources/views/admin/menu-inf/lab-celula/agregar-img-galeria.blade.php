@extends('layouts.administrador')

@section('title', 'Agregar Imágenes')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

<div class="seccion-principal">

  <div class="contenedor-titulo-seccion">
  
      <h3>Célula de Desarrollo de Software</h3>

  </div>

  <!------------------------------------------------------------- INFORMACIÓN ---------------------------------------------------------->

      <form id="formulario" class="form-group" files = "true" method="POST" action="/Img-Lab-Celula" enctype="multipart/form-data">
        @csrf
      <div class="formulario">

        <label for="">Tamaño de imagen recomendado: 200px de ancho y 150px de alto</label>
        
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
          <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong>
        </span>
      @endif

  		<div class="contenedor-botones">

  			<a id="save" texto="guardar el nuevo elemento?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>

  		</div>

    </form>

</div>
<!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->

      <div class="contenedor-previsualizar-seccion">

        <div class="contenedor-titulo-seccion">

          <h3>Previsualización</h3>

        </div>

        @foreach ($imagenes as $imagen)
        <div class="contenedor-seccion-preliminar-img">

          <div class="contenedor-seccion-preliminar-img-ajustable">

            <img src="/images/infra/{{$imagen->imagen}}">

          </div>


        </div>

        @endforeach

      </div>

       <div class="contenedor-botones">

      <a class="msj" mesanje="finalizar?" href="/Lab-Celula"><button type="button" class="btn finalizar"><span>Finalizar</span></button></a>
    
      </div>

@endsection
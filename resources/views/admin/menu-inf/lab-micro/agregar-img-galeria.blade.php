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
  
      <h3>Laboratorio de Microprocesadores</h3>

  </div>

  <!------------------------------------------------------------- INFORMACIÓN ---------------------------------------------------------->
      <form id="formulario" class="form-group" files = "true" method="POST" action="/Img-Lab-Micro" enctype="multipart/form-data">
        @csrf
      <div class="formulario">

        <label>Tamaño mínimo de la imagen recomendado: 500 x 500 pixeles. Tamaño máximo del archivo: 512KB.</label>
        
      </div>

  		<div class="contenedor-cargar-img">

  				<div class="contenedor-txt-seccion">

  					<label>Seleccionar imagen</label>

  				</div>

  				<div class="contenedor-boton-cargar">

  					<label for="file-upload" class="subir">
  						<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
  					</label>

  					<input id="file-upload" name="image" value="" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

  				</div>


  				<div class="contenedor-img-seccion-cuadrado">

  					<img id="img-pre" src="/img/LogoNuevaImagen.png">

  				</div>


  		</div>

      <div id="info-img">No se eligió archivo</div>

      @if ($errors->has('image'))
        <span class="invalid-feedback" role="alert">

          <strong>{{$errors->first('image')}}</strong>
          <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong> -->
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

        <!---------------------------------- MODAL IMG -------------------------------------------->

          <div class="contenedor-seccion-preliminar-img-ajustable hover-img">

            <a href="#modal-img{{$imagen->id}}">

              <img src="/images/infra/{{$imagen->imagen}}">
              <span><i class="fas fa-expand"></i></span>

            </a>

          </div>

            <div class="modal-img" id="modal-img{{$imagen->id}}">

              <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
              <img src="/images/infra/{{$imagen->imagen}}" />

            </div>

        <!---------------------------------- FIN MODAL IMG -------------------------------------------->


        </div>

        @endforeach

      </div>

       <div class="contenedor-botones">

      <a class="msj" mesanje="finalizar?" href="/Lab-Micro"><button type="button" class="btn finalizar"><span>Finalizar</span></button></a>
    
      </div>

@endsection
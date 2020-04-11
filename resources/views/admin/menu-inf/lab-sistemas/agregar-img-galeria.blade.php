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
  
      <h3>Laboratorio de Sistemas</h3>

  </div>

  <!------------------------------------------------------------- INFORMACIÓN ---------------------------------------------------------->

      <form class="form-group" files = "true" method="POST" action="/Img-Lab-Sistemas" enctype="multipart/form-data">
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


  		<div class="contenedor-botones">

  			<a onclick="return confirm('¿Desea guardar el nuevo elemento?')" href="/Img-Lab-Sistemas-Registrar"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>

  		</div>
    </form>

</div>
<!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->

      <div class="contenedor-previsualizar-seccion">

        <div class="contenedor-titulo-seccion">

          <h3>Previsualización</h3>

        </div>

        @foreach ($imagenes as $imagen)
        <div class="contenedor-seccion-preliminar">

          <div class="contenedor-seccion-preliminar-img-ajustable">

            <img src="/images/infra/{{$imagen->imagen}}">

          </div>


        </div>

        @endforeach

      </div>

       <div class="contenedor-botones">

      <a onclick="return confirm('¿Desea regresar al menú anterior?')" href="/Lab-Sistemas"><button type="button finalizar" class="btn"><span>Finalizar</span></button></a>
    
      </div>

@endsection
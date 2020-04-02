@extends('layouts.administrador')

@section('title', 'Agregar Imágenes')

@section('content')

<div class="seccion-principal">

  <div class="contenedor-titulo-seccion">
  
      <h3>Laboratorio de Microprocesadores</h3>

  </div>

  <!------------------------------------------------------------- INFORMACIÓN ---------------------------------------------------------->

  		<div class="formulario">

  			<label for="">Titulo</label>

  			<input type="text" name="contenido" id="titulo" value="" placeholder="Inserte Titulo Deseado" class="form-control" required>

  		</div>

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

  					<div id="info-img">No se Eligió Archivo</div>


  				</div>


  				<div class="contenedor-img-seccion">

  					<img id="img-pre" src="/img/LogoNuevaImagen.png">

  				</div>


  		</div>

  		<div class="contenedor-botones">

  			<a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

  		</div>

  		<!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->


  		<div class="contenedor-previsualizar-seccion">

  			<div class="contenedor-titulo-seccion">

  				<h3>Previsualización</h3>

  			</div>

        @foreach ($sliders as $slider)


  			<div class="contenedor-seccion-preliminar">

          <div class="contenedor-seccion-preliminar-slider-img">

  				  <img src="">

          </div>


  				<h2>{{$slider->contenido}}</h2>

  			</div>
      @endforeach

  		</div>

      <div class="contenedor-botones">

      <a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
    
      </div>


</div>	

@endsection
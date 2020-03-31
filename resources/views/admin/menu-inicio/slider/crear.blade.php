@extends('layouts.administrador')

@section('title', 'Agregar Noticia')

@section('content')
		<div class="seccion-principal">


  	<!----------------------------------------------------------------- FORMULARIO - CARGAR IMG ---------------------------------------------------------->

@if(count($sliders) <=3  )
		<form class="form-goup" files="true" method="POST" action="/slider" enctype="multipart/form-data">
          @csrf
  		<div class="formulario">

  			<label for="">Titulo</label>

  			<input type="text" name="contenido" id="titulo" value="" placeholder="Inserte Titulo Deseado" class="form-control" required>

  		</div>

      <div class="formulario">

        <label for="">Tamaño de imagen recomendado: 1000px de ancho y 250px de alto</label>
        
      </div>

  		<div class="contenedor-cargar-img">

  				<div class="contenedor-txt-seccion">

  					<label for="">Cargar IMG</label>

  				</div>

  				<div class="contenedor-boton-cargar">

  					<label for="file-upload" class="subir">
  						<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
  					</label>

  					<input id="file-upload" name="image" value="/img/slider/" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;'/>

  					<div id="info-img">No se Eligió Archivo</div>


  				</div>


  				<div class="contenedor-img-seccion">

  					<img id="img-pre" src="/img/sistemas.png">

  				</div>


  		</div>

  		<div class="contenedor-botones">

  			<a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

  		</div>

</form>
@else

	<div class="alert alert-danger" role="alert" >Se alcanzo limite de 4 Sliders, por favor edite los slider existentes </div>

@endif

  <!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->


  		<div class="contenedor-previsualizar-seccion">

  			<div class="contenedor-titulo-seccion">

  				<h3>Previsualización</h3>

  			</div>

        @foreach ($sliders as $slider)


  			<div class="contenedor-seccion-preliminar">

          <div class="contenedor-seccion-preliminar-slider-img">

  				  <img src="/images/slider/{{$slider->image}}">

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

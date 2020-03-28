@extends('layouts.administrador')

@section('title', 'Editar Noticia')

@section('content')
		<div class="seccion-principal">


  	<!----------------------------------------------------------------- FORMULARIO - CARGAR IMG ---------------------------------------------------------->

    <form class="form-goup" files="true" method="POST" action="/slider" enctype="multipart/form-data">
          @csrf
  		<div class="formulario">

  			<label for="">Titulo</label>

  			<input type="text" name="contenido" id="titulo" value="" placeholder="Inserte Titulo Deseado" class="form-control" required>

  		</div>

  		<div class="contenedor-cargar-img">

  				<div class="contenedor-txt-seccion">

  					<label for="">Cargar IMG</label>

  				</div>

  				<div class="contenedor-boton-cargar">

  					<label for="file-upload" class="subir">
  						<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
  					</label>

  					<input id="file-upload" name="image" value="/img/slider/" onchange='cambiar()' type="file" style='display: none;'/>

  					<div id="info-img">No se Eligió Archivo</div>


  				</div>


  				<div class="contenedor-img-seccion">

  					<img src="/img/sistemas.png">

  				</div>


  		</div>

  		<div class="contenedor-botones">

  			<a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

  		</div>

</form>
  
  <a onclick="return confirm('¿Desea cancelar la creación del nuevo elemento?')" href="{{url()->previous()}}"><button class="btn" type="submit"><span>Cancelar</span></button></a>

  <!------------------------------------------------------------- PREVISUALIZACIÓN ---------------------------------------------------------->


  		<div class="contenedor-previsualizar-seccion">

  			<div class="contenedor-titulo-seccion">

  				<h3>Previsualización</h3>

  			</div>

        @foreach ($sliders as $slider)


  			<div class="contenedor-seccion-preliminar">

  				<img src="/images/slider/{{$slider->image}}">
  				<h2>{{$slider->contenido}}</h2>

  			</div>
      @endforeach

  		</div>


</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="{{asset('js/select.js')}}""></script>
@endsection

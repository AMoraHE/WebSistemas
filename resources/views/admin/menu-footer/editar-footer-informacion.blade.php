@extends('layouts.administrador')

@section('title', 'Editar Información General')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Editar - Información de la escuela</h3>											

	</div> 

<!--------------------------------------------------- FORMULARIO - EDITAR INFORMACION DE LA CARRERA ---------------------------------------------------------------------->


	<form id="formulario" class="form group" method="POST" action="/infoFooter/{{$infoFooter->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf

	<div class="contenedor-cargar-img">

      <div class="contenedor-txt-seccion">
              
        <label>Seleccionar logo</label>

      </div>

      <div class="contenedor-boton-cargar">

        <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>     
        <input id="file-upload" onchange='cambiar()' name="img" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;'/>              
              
      </div>

      <div class="contenedor-img-seccion-cuadrado">
              
        <img id="img-pre" src="/img/{{$infoFooter->img}}">

      </div>
              
    </div>

    <div id="info-img">No se eligió archivo</div>

    @if ($errors->has('img'))
      <span class="invalid-feedback" role="alert">

        <strong>{{$errors->first('img')}}</strong>

      </span>
    @endif


		<div class="formulario">

	      <label>Título</label>
	      @if ($errors->any())
	  		<input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="Inserte El Título Deseado" class="form-control" required>
	      @else
	      <input type="text" name="titulo" id="titulo" value="{{$infoFooter->titulo}}" placeholder="Inserte El Título Deseado" class="form-control" required>
	      @endif

	  	</div>

	    @if ($errors->has('titulo'))
	      <span class="invalid-feedback" role="alert">
	        <strong>{{ $errors->first('titulo') }}</strong>
	      </span>
	    @endif

		<div class="formulario">
				
			<label>Información general</label>
			@if ($errors->any())
			<textarea type="text" name="descripcion" placeholder="Insete La Decripción Deseada" required>{{old('descripcion')}}</textarea> 
			@else
			<textarea type="text" name="descripcion" placeholder="Insete La Decripción Deseada" required>{{$infoFooter->descripcion}}</textarea> 
			@endif
				
		</div>

		@if ($errors->has('descripcion'))
	      <span class="invalid-feedback" role="alert">
	          <strong>{{ $errors->first('descripcion') }}</strong>
	      </span>
	    @endif
<!----------------------------------------------------------------- BOTONES INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------->

		<div class="contenedor-botones">
					
			<a id="save" texto="guardar los cambios?"><button type="submit" class="btn guardar"><span>Guardar</span></button></a>
			<a class="msj" mesanje="Cancelar" href="/admin-footer"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
	
		</div> 
		
	</form>  

</div> 

@endsection
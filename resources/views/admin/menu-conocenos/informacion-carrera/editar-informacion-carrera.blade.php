@extends('layouts.administrador')

@section('title', 'Editar Información Carrera')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Editar - {{$informacion->categoria}}</h3>											

	</div> 

<!--------------------------------------------------- FORMULARIO - EDITAR INFORMACION DE LA CARRERA ---------------------------------------------------------------------->


	<form id="formulario" class="form group" method="POST" action="/informacion/{{$informacion->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf

	<div class="contenedor-cargar-img">

      <div class="contenedor-txt-seccion">
              
        <label>Seleccionar Logo</label>

      </div>

      <div class="contenedor-boton-cargar">

        <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>     
        <input id="file-upload" onchange='cambiar()' name="img" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;'/>              
              
      </div>

      <div class="contenedor-img-seccion-cuadrado">
              
        <img id="img-pre" src="/images/informacion/{{$informacion->img}}">

      </div>
              
    </div>

    <div id="info-img">No se eligió archivo</div>

    @if ($errors->has('img'))
      <span class="invalid-feedback" role="alert">

        <strong>{{$errors->first('img')}}</strong>

      </span>
    @endif


		<div class="formulario">
				
			<label>Información</label>
			@if ($errors->any())
			<textarea class="RichText" type="text" name="descripcion" required>{{old('descripcion')}}</textarea> 
			@else
			<textarea class="RichText" type="text" name="descripcion" required>{{$informacion->descripcion}}</textarea> 
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
			<a class="msj" mesanje="Cancelar" href="/informacion"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
	
		</div> 
		
	</form>  

</div> 

@endsection
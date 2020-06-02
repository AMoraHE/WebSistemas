@extends('layouts.administrador')

@section('title', 'Editar Información Carrera')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Editar - Redes Sociales</h3>											

	</div>

	<div class="formulario">

    	<label>Tamaño máximo de la imagen recomendado: 128 x 128 pixeles. Tamaño máximo del archivo: 512KB.</label>
          
  	</div> 

<!--------------------------------------------------- FORMULARIO - EDITAR INFORMACION DE LA CARRERA ---------------------------------------------------------------------->


	<form id="formulario" class="form group" method="POST" action="/redSocial" enctype="multipart/form-data">
		@csrf

		<div class="contenedor-cargar-img">

	      <div class="contenedor-txt-seccion">
	              
	        <label>Seleccionar logo</label>

	      </div>

	      <div class="contenedor-boton-cargar">

	        <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>     
	        <input id="file-upload" onchange='cambiar()' name="icon" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;'/>              
	              
	      </div>

	      <div class="contenedor-img-seccion-cuadrado">
	              
	        <img id="img-pre" src="{{old('icon')}}">

	      </div>
	              
	    </div>

	    <div id="info-img">No se eligió archivo</div>

	    @if ($errors->has('icon'))
	      <span class="invalid-feedback" role="alert">

	        <strong>{{$errors->first('icon')}}</strong>

	      </span>
	    @endif

		<div class="formulario">
				
			<label>Descripción</label>
			
			<input type="text" name="descripcion" id ="" value="{{old('descripcion')}}" placeholder="Ej: Síguenos en Facebook" required>
			
				
		</div>

		@if ($errors->has('descripcion'))
	      <span class="invalid-feedback" role="alert">
	          <strong>{{ $errors->first('descripcion') }}</strong>
	      </span>
	    @endif

	    <div class="formulario">
				
			<label>Enlace</label>
			
			<input type="text" name="enlace" id ="" value="{{old('enlace')}}" placeholder="Ej: www.facebook.com/isc" required>
			
				
		</div>

		@if ($errors->has('enlace'))
	      <span class="invalid-feedback" role="alert">
	          <strong>{{ $errors->first('enlace') }}</strong>
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
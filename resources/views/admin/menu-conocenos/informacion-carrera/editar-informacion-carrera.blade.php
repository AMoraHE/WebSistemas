@extends('layouts.administrador')

@section('title', 'Editar Información Carrera')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion-select">

		<h3>Editar - {{$informacion->categoria}}</h3>											

	</div> 

<!--------------------------------------------------- FORMULARIO - EDITAR INFORMACION DE LA CARRERA ---------------------------------------------------------------------->


	<form id="formulario" class="form group" method="POST" action="/informacion/{{$informacion->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf

		<div class="formulario">
				
			<label>Información</label>
			@if ($errors->any())
			<textarea type="text" name="descripcion" required>{{old('descripcion')}}</textarea> 
			@else
			<textarea type="text" name="descripcion" required>{{$informacion->descripcion}}</textarea> 
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
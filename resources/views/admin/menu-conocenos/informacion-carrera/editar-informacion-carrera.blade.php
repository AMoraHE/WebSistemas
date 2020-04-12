@extends('layouts.administrador')

@section('title', 'Editar Información Carrera')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion-select">

		<h3>Editar Información de la Carrera</h3>		
		<h4>{{$informacion->categoria}}</h4>
									

	</div> 

<!--------------------------------------------------- FORMULARIO - EDITAR INFORMACION DE LA CARRERA ---------------------------------------------------------------------->


	<form id="formulario" class="form group" method="POST" action="/informacion/{{$informacion->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf

		<div class="formulario">
				
			<label>Información</label>
			<textarea type="text" name="descripcion" required>{{$informacion->descripcion}}</textarea> 
				
		</div>
<!----------------------------------------------------------------- BOTONES INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------->

		<div class="contenedor-botones">
					
			<a id="save" texto="guardar los cambios?"><button type="submit" class="btn guardar"><span>Guardar</span></button></a>
			<a class="msj" mesanje="cancelar" href="/informacion"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
	
		</div> 
		
	</form>  

</div> 

@endsection
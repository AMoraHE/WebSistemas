@extends('layouts.administrador')

@section('title', 'Editar Contacto General')

@section('content')

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Editar - Contactos generales</h3>											

	</div>

<!--------------------------------------------------- FORMULARIO - EDITAR CONTACTOS GENERALES ---------------------------------------------------------------------->

	<form id="formulario" class="form group" method="POST" action="/contactoGen/{{$contactoGen->slug}}" enctype="multipart/form-data">
	@method('PUT')
	@csrf

		<div class="formulario">
				
			<label>Título</label>
			@if ($errors->any())
			<input type="text" name="titulo" id ="titulo" value="{{old('titulo')}}" readonly>
			@else
			<input type="text" name="titulo" id ="titulo" value="{{$contactoGen->titulo}}" readonly>
			@endif
				
		</div>

		@if ($errors->has('titulo'))
	      <span class="invalid-feedback" role="alert">
	          <strong>{{ $errors->first('titulo') }}</strong>
	      </span>
	    @endif

		<div class="formulario">
				
			<label>Información</label>
			@if ($errors->any())
			<textarea type="text" name="descripcion" required>{{old('descripcion')}}</textarea> 
			@else
			<textarea type="text" name="descripcion" required>{{$contactoGen->descripcion}}</textarea> 
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
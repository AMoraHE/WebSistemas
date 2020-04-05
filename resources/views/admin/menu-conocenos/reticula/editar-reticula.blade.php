@extends('layouts.administrador')

@section('title', 'Reticula')

@section('content')

		<!----------------------------------------------------------------- FORMULARIO - CARGAR RETICULA ---------------------------------------------------------->
		
<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

	    <h3>Actualizar Retícula</h3>

	</div>

<!----------------------------------------------------------------- FORMULARIO - RETICULA ---------------------------------------------------------->

	<form class="form-group" method="POST" action="/VerReticula/{{$reticula->slug}}" enctype="multipart/form-data">
		@method('PUT')
	    @csrf

		<div class="formulario">
				
			<label>Título</label>
			<input type="text" name="titulo" id="titulo-ret" value="{{$reticula->titulo}}" placeholder="Inserte Título Deseado" class="form-control" required>

		</div>

		<div class="formulario">
				
			<label>Programa</label>
			<input type="text" name="programa" id="programa-ret" value="{{$reticula->programa}}" placeholder="Inserte Nombre Programa Educativo" class="form-control" required>

		</div>

		<div class="formulario">
				
			<label>Plan</label>
			<input type="text" name="plan" id="plan-ret" value="{{$reticula->plan}}" placeholder="Inserte Plan Estudio" class="form-control" required>

		</div>

		<div class="formulario">
				
			<label>Especialidad</label>
			<input type="text" name="especialidad" id="especialidad-ret" value="{{$reticula->especialidad}}" placeholder="Inserte Especialidad" class="form-control" required>

		</div>

<!----------------------------------------------------------------- FORMULARIO CARGAR PDF - RETICULA ---------------------------------------------------------->

		<div class="contenedor-cargar-img">

			<div class="contenedor-txt-seccion">
						
				<label for="">Cargar Archivo</label>

			</div>

			<div class="contenedor-boton-cargar">

				<label for="file-upload" class="subir"><i class="fas fa-cloud-upload-alt"></i> Subir Archivo</label>	
				<input id="file-upload"  onchange='cambiar()' name="doc" type="file" accept="application/pdf" style='display: none;'/>
						
			</div>

		</div>

		<div class="cargar-doc-pdf">

			<i class="icono-pdf fas fa-file-pdf"></i>
			<div id="info-img">No se seleccionó archivo</div>
							
		</div>

<!----------------------------------------------------------------- BOTONES - RETICULA ---------------------------------------------------------->

		<div class="contenedor-botones">
		                
		    <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
		    <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="{{route('reticula')}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
		        
		</div>


	</form>

</div>

@endsection
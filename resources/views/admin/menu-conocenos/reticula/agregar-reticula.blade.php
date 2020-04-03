@extends('layouts.administrador')

@section('title', 'Reticula')

@section('content')

		<!----------------------------------------------------------------- FORMULARIO - CARGAR RETICULA ---------------------------------------------------------->
		
	<div class="seccion-principal">

		<div class="contenedor-titulo-seccion">

	        <h3>Registrar Nueva Retícula</h3>

	    </div>

		<form class="form-group" method="POST" action="/VerReticula" enctype="multipart/form-data">
	    	@csrf

			<div class="formulario">
				
				<label for="">Título</label>
				<input type="text" name="titulo" id="titulo-ret" value="" placeholder="Inserte Título Deseado - Especificar si la retícula es actual" class="form-control" required>

			</div>

			<div class="formulario">
				
				<label for="">Programa</label>
				<input type="text" name="programa" id="programa-ret" value="Ingeniería En Sistemas Computacionales" placeholder="Inserte Nombre Programa Educativo" class="form-control" required>

			</div>

			<div class="formulario">
				
				<label for="">Plan</label>
				<input type="text" name="plan" id="plan-ret" value="" placeholder="Inserte Plan Estudio" class="form-control" required>

			</div>

			<div class="formulario">
				
				<label for="">Especialidad</label>
				<input type="text" name="especialidad" id="especialidad-ret" value="" placeholder="Inserte Especialidad" class="form-control" required>

			</div>

			<div class="contenedor-cargar-img">

					<div class="contenedor-txt-seccion">
						
						<label for="">Cargar Archivo</label>

					</div>

					<div class="contenedor-boton-cargar">

						<label for="file-upload" class="subir">
							<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
						</label>
							
						<input id="file-upload"  onchange='cambiar()' name="doc" type="file" accept="application/pdf" style='display: none;' required />

						<div class="cargar-doc-pdf">

							<i class="icono fas fa-file-pdf"></i>
							<div id="info-img">No se seleccionó archivo</div>
							
						</div>
						
					</div>

			</div>

			<div class="contenedor-botones">
		                
		        <a onclick="return confirm('¿Desea registrar la nueva retícula?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

		        <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="{{route('reticula')}}"><button type="button" class="btn"><span>Cancelar</span></button></a>

		        
		    </div>


		</form>

	</div>


@endsection
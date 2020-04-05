@extends('layouts.administrador')

@section('title', 'Reticula')

@section('content')

<!------------------------------------------------------------------------ RETICULA ----------------------------------------------------------------->
		
<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

	    <h3>Registrar Nueva Retícula</h3>

	</div>

<!----------------------------------------------------------------- FORMULARIO - RETICULA ---------------------------------------------------------->

	<form class="form-group" method="POST" action="/VerReticula" enctype="multipart/form-data">
	    @csrf

		<div class="formulario">
				
			<label>Título</label>
			<input type="text" name="titulo" id="titulo-ret" value="{{old('titulo')}}" placeholder="Inserte Título Deseado - Especificar si la retícula es actual" class="form-control" required>

		</div>

		@if ($errors->has('titulo'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('titulo') }}</strong>
            </span>
        @endif

		<div class="formulario">
				
			<label>Programa</label>
			<input type="text" name="programa" id="programa-ret" value="Ingeniería En Sistemas Computacionales" placeholder="Inserte Nombre Programa Educativo" class="form-control" required>

		</div>

		@if ($errors->has('programa'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('programa') }}</strong>
            </span>
        @endif

		<div class="formulario">
				
			<label>Plan</label>
			<input type="text" name="plan" id="plan-ret" value="{{old('plan')}}" placeholder="Inserte Plan Estudio" class="form-control" required>

		</div>

		@if ($errors->has('plan'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('plan') }}</strong>
            </span>
        @endif

		<div class="formulario">
				
			<label>Especialidad</label>
			<input type="text" name="especialidad" id="especialidad-ret" value="{{old('especialidad')}}" placeholder="Inserte Especialidad" class="form-control" required>

		</div>

		@if ($errors->has('especialidad'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('especialidad') }}</strong>
            </span>
        @endif

<!----------------------------------------------------------------- FORMULARIO CARGAR PDF - RETICULA ---------------------------------------------------------->

		<div class="contenedor-cargar-img">

			<div class="contenedor-txt-seccion">
						
				<label>Cargar Archivo</label>

			</div>

			<div class="contenedor-boton-cargar">

				<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>	
				<input id="file-upload"  onchange='cambiar()' name="doc" type="file" accept="application/pdf" style='display: none;' required />
						
			</div>

		</div>


		<div class="cargar-doc-pdf">

			<i class="icono-pdf fas fa-file-pdf"></i>
			<div id="info-img">No se seleccionó archivo</div>
							
		</div>

		@if ($errors->has('doc'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('doc') }}</strong>
            </span>
        @endif

<!----------------------------------------------------------------- BOTONES - RETICULA ---------------------------------------------------------->

		<div class="contenedor-botones">
		                
		    <a onclick="return confirm('¿Desea registrar la nueva retícula?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
		    <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="{{route('reticula')}}"><button type="button" class="btn"><span>Cancelar</span></button></a>

		</div>


		</form>

	</div>


@endsection
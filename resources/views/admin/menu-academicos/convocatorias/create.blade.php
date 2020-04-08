@extends('layouts.administrador')

@section('title', 'Crear Convocatorias')

@section('content')

	<div class="seccion-principal">


	<div class="contenedor-titulo-seccion">

		<h3>Agregar Convocatorias</h3>


			</div>

		<!----------------------------------------------------------------- CARGRA IMG Convocatorias ---------------------------------------------------------->

			<form class="form-goup"  files = "true" method="POST" action="/ConvocatoriasAcademicos" enctype="multipart/form-data" >
			@csrf

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

		<!----------------------------------------------------------------- FORMULARIO Convocatorias ---------------------------------------------------------->

		


		   <!-----------------------------Convocatoria------------------------>

			<div class="formulario">

				<label>Convocatoria</label>
				<input type="text" name="convocatoria" id="convocatoria" value="{{old('convocatoria')}}" placeholder="Nombre de la conocatoria" class="form-control" required>

				@if ($errors->has('convocatoria'))

		      		<span class="invalid-feedback" role="alert">

		        		<strong>{{ $errors->first('convocatoria') }}</strong>

		      		</span>

		    	@endif

			</div>

			<div class="contenedor-formulario-dividido">

			<!-----------------------------Fecha Inicio------------------------>

				<div class="columna-de-dos">

					<div class="formulario">

						<label>Fecha Inicio</label>
						<input  type="date" id="" class="form-control" name="" required/>

						@if ($errors->has('convocatoria'))

				      		<span class="invalid-feedback" role="alert">

				        		<strong>{{ $errors->first('convocatoria') }}</strong>

				      		</span>

				    	@endif

					</div>

				</div>

					<!-----------------------------Fecha Final------------------------>

				<div class="columna-de-dos">

					<div class="formulario">

						<label>Fecha Final</label>
						<input  type="date" id="" class="form-control" name="" required/>

						@if ($errors->has('convocatoria'))

				      		<span class="invalid-feedback" role="alert">

				        		<strong>{{ $errors->first('convocatoria') }}</strong>

				      		</span>

				    	@endif

					</div>

				</div>

			</div>

		   <!----------------------------------DESCRIPCION---------------->

		   <div class="formulario">

				<label>Descripcion</label>
				<textarea name="descripcion" placeholder="Descripcion" required>{{old('descripcion')}}</textarea>

				@if ($errors->has('descripcion'))

		      		<span class="invalid-feedback" role="alert">

		        		<strong>{{ $errors->first('descripcion') }}</strong>

		      		</span>

		    	@endif

			</div>


		<!----------------------------------------------------------------- BOTONES convocatoria ---------------------------------------------------------->

			<div class="contenedor-botones">

				<a onclick="return confirm('¿Desea guardar la nueva convocatoria?')"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
		 		<a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/ConvocatoriasAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>


			</div>

		</form>

		</div>

		@endsection

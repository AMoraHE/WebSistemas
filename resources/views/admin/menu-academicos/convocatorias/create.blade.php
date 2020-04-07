@extends('layouts.administrador')

@section('title', 'Convocatorias')

@section('content')

	<div class="seccion-principal">


	<div class="contenedor-titulo-seccion">

		<h3>Convocatorias</h3>


			</div>

		<!----------------------------------------------------------------- CARGRA IMG Convocatorias ---------------------------------------------------------->

			<form class="form-goup"  files = "true" method="POST" action="/ConvocatoriasAcademicos" enctype="multipart/form-data" >
			@csrf

			<div class="formulario">

		 		<label>Tamaño de imagen recomendado: 1100px de ancho y 450px de alto</label>

		 	</div>

			<div class="contenedor-cargar-img">

				<div class="contenedor-txt-seccion">

		        	<label>Cargar IMG</label>

		      	</div>

				<div class="contenedor-boton-cargar">

					<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i>Subir Imágen</label>

					<input id="file-upload" onchange='cambiar()' name="imagen" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

				</div>

				<div class="contenedor-img-seccion">

		 			<img id="img-pre" src="/img/LogoNuevaImagen.png">

		 		</div>

			</div>

			<div id="info-img">No se Eligió Archivo</div>

			@if ($errors->has('imagen'))

		      <span class="invalid-feedback" role="alert">

		        <strong>{{ $errors->first('imagen') }}</strong>

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

				<a onclick="return confirm('¿Desea guardar la nueva convocatoria?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
		 		<a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/ConvocatoriasAcademicos"><button type="button" class="btn"><span>Cancelar</span></button></a>


			</div>

		</form>

		</div>

		@endsection

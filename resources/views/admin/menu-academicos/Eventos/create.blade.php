@extends('layouts.administrador')

@section('title', 'Crear Eventos')

@section('content')

<!----------------------------------------------------------------- AGREGAR EVENTOS ---------------------------------------------------------->

<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

		<h3>Agregar - Eventos</h3>

	</div>



<!------------------------FORMULARIO---------------------------------------------------------->
<form id="formulario" class="form-group" method="POST" action="/EventosAcademicos" enctype="multipart/form-data">
	    @csrf

	    <div class="formulario">
				
			<label>Título</label>
			<input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="Inserte título del evento" class="form-control" required>

		</div>

		@if ($errors->has('titulo'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('titulo') }}</strong>
            </span>
        @endif

        <div class="contenedor-formulario-dividido">

		    <div class="columna-de-dos">

		    	<div class="formulario">

			        <label>Fecha Inicio</label>
			        <input  class="fecha" data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{old('FInicio')}}" required />

		      	</div>

		 	</div>

		 	@if ($errors->has('FInicio'))
            	<span class="invalid-feedback" role="alert">
                	<strong>{{ $errors->first('FInicio') }}</strong>
            	</span>
        	@endif

		    <div class="columna-de-dos">

		     	<div class="formulario">

			        <label>Fecha Cierre</label>
			        <input  class="fecha" data-date-format="l j, F, Y" id="FCierre" name="FCierre" value="{{old('FCierre')}}" required />

		     	</div>

			</div>

			@if ($errors->has('FCierre'))
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $errors->first('FCierre') }}</strong>
	            </span>
        	@endif

		</div>

	    <div class="formulario">
				
			<label>Descripción</label>
			<textarea name="descripcion" placeholder="Descripcion" required>{{old('descripcion')}}</textarea>

		</div>

		@if ($errors->has('descripcion'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('descripcion') }}</strong>
            </span>
        @endif
<!---------------------------------PDF----------------------------------------------->

	<div class="formulario">
			
		<label>Peso del documento menor a 2 Mb</label>

	</div>

<div class="contenedor-cargar-img">

			<div class="contenedor-txt-seccion">
						
				<label>Cargar Archivo</label>

			</div>

			<div class="contenedor-boton-cargar">

				<label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>	
				<input id="file-upload"  onchange='cambiar()' name="doc" type="file" accept="application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, application/vnd.openxmlformats-officedocument.presentationml.presentation, application/vnd.ms-powerpoint" style='display: none;' required />
						
			</div>

		</div>


		<div class="cargar-doc-pdf">

			<i class="icono-pdf fas fa-file-pdf"></i>
			<div id="info-img">No se seleccionó archivo</div>
							
		</div>

		@if ($errors->has('doc'))
            <span class="invalid-feedback" role="alert">
            	<strong>{{ $errors->first('doc') }}</strong>
                <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo PDF, WORD, EXCEL, POWERPOINT</strong> -->
            </span>
        @endif


<!--------------------------------------- BOTONES EVENTOS ------------------->

	<div class="contenedor-botones">

		<a id="save" texto="guardar el nuevo evento?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
 		<a class="msj" mesanje="cancelar?" href="/EventosAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
	

	</div>

</form>

</div>

<!----------------------------------------------------------------- SCRIPT DE FECHA ---------------------------------------------------------->

		<script>
	
			$('.fecha').flatpickr({

				locale: {
			        firstDayOfWeek: 1,
			        weekdays: {
			          shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
			          longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],         
			        }, 
			        months: {
			          shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct', 'Nov', 'Dic'],
			          longhand: ['Enero', 'Febreo', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			        },
		      },

			});

		</script>
	
@endsection
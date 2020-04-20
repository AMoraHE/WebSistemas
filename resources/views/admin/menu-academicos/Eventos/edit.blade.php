@extends('layouts.administrador')

@section('title', 'Editar Eventos')

@section('content')

		<!----------------------------------------------------------------- FORMULARIO ---------------------------------------------------------->
		
<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

	    <h3>Editar - Eventos</h3>

	</div>

<!----------------------------------------------------------------- EVENTOS ---------------------------------------------------------->

	<form id="formulario" class="form-group" method="POST" action="/EventosAcademicos/{{$evento->slug}}" enctype="multipart/form-data">
		@method('PUT')
	    @csrf

		<div class="formulario">
				
			<label>Título</label>
			@if ($errors->any())
			<input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="Inserte título del evento" required>
			@else
			<input type="text" name="titulo" id="titulo-ret" value="{{$evento->titulo}}" placeholder="Inserte Título Deseado" required>
			@endif

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
					@if ($errors->any())
					<input  class="fecha" data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{old('FInicio')}}" required />
					@else
					<input  class="fecha" data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{$evento->FInicio}}" required />
					@endif

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
			        @if ($errors->any())
			        <input  class="fecha" data-date-format="l j, F, Y" id="FCierre" name="FCierre" value="{{old('FCierre')}}" required />
			        @else
			        <input  class="fecha" data-date-format="l j, F, Y" id="FCierre" name="FCierre" value="{{$evento->FCierre}}" required />
			        @endif

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
			@if ($errors->any())
			<textarea placeholder="Reescriba la descripción seleccionada" name="descripcion" required>{{old('descripcion')}}</textarea>
			@else
			<textarea placeholder="Reescriba la descripción seleccionada" name="descripcion" required>{{$evento->descripcion}}</textarea>
			@endif

		</div>

		@if ($errors->has('descripcion'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('descripcion') }}</strong>
            </span>
        @endif

		

<!-------------------------------PDF------------------------------------------------------------->

		<div class="formulario">
			
			<label>Peso del documento menor a 1 Mb</label>

		</div>

		<div class="contenedor-cargar-img">

			<div class="contenedor-txt-seccion">
						
				<label for="">Cargar Archivo</label>

			</div>

			<div class="contenedor-boton-cargar">

				<label for="file-upload" class="subir"><i class="fas fa-cloud-upload-alt"></i> Subir Archivo</label>	
				<input id="file-upload"  onchange='cambiar()' name="doc" type="file" accept="application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, application/vnd.openxmlformats-officedocument.presentationml.presentation, application/vnd.ms-powerpoint" style='display: none;'/>
						
			</div>

		</div>

		

		<div class="cargar-doc-pdf">

			<i class="icono-pdf fas fa-file-pdf"></i>
			<div id="info-img">{{$evento->documento}}</div>
							
		</div>

		@if ($errors->has('doc'))
            <span class="invalid-feedback" role="alert">
                <strong>El archivo seleccionado no es válido, seleccione un archivo PDF, WORD, EXCEL, POWERPOINT</strong>
            </span>
        @endif

<!----------------------------------------------------------------- BOTONES EVENTOS---------------------------------------------------------->

		<div class="contenedor-botones">
		                
		    <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
		    <a class="msj" mesanje="cancelar?" href="{{route('EventosAcademicos')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
		        
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
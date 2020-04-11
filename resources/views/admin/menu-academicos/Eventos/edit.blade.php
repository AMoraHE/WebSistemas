@extends('layouts.administrador')

@section('title', 'Editar Eventos')

@section('content')

		<!----------------------------------------------------------------- FORMULARIO ---------------------------------------------------------->
		
<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

	    <h3>Editar eventos</h3>

	</div>

<!----------------------------------------------------------------- EVENTOS ---------------------------------------------------------->

	<form id="formulario" class="form-group" method="POST" action="/EventosAcademicos/{{$evento->slug}}" enctype="multipart/form-data">
		@method('PUT')
	    @csrf

		<div class="formulario">
				
			<label>Título</label>
			@if ($errors->any())
			<input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" placeholder="Inserte título del evento" class="form-control" required>
			@else
			<input type="text" name="titulo" id="titulo-ret" value="{{$evento->titulo}}" placeholder="Inserte Título Deseado" class="form-control" required>
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
					<input  type="date" id="FInicio" class="form-control" name="FInicio" value="{{old('FInicio')}}" required />
					@else
					<input  type="date" id="FInicio" class="form-control" name="FInicio" value="{{$evento->FInicio}}" required />
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
			        <input  type="date" id="FCierre" class="form-control" name="FCierre" value="{{old('FCierre')}}" required />
			        @else
			        <input  type="date" id="FCierre" class="form-control" name="FCierre" value="{{$evento->FCierre}}" required />
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
			<div id="info-img">{{$evento->documento}}</div>
							
		</div>

		@if ($errors->has('doc'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('doc') }}</strong>
            </span>
        @endif

<!----------------------------------------------------------------- BOTONES EVENTOS---------------------------------------------------------->

		<div class="contenedor-botones">
		                
		    <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
		    <a class="msj" mesanje="Cancelar?" href="{{route('EventosAcademicos')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
		        
		</div>


	</form>

</div>

@endsection
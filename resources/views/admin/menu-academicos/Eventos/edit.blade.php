@extends('layouts.administrador')

@section('title', 'Editar Eventos')

@section('content')

		<!----------------------------------------------------------------- FORMULARIO - CARGAR RETICULA ---------------------------------------------------------->
		
<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">

	    <h3>Editar eventos</h3>

	</div>

<!----------------------------------------------------------------- FORMULARIO - RETICULA ---------------------------------------------------------->

	<form class="form-group" method="POST" action="/EventosAcademicos/{{$evento->slug}}" enctype="multipart/form-data">
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

		<div class="formulario">
				
			<label>Descripción</label>
			@if ($errors->any())
			<input type="text" name="descripcion" id="descripcion" value="{{old('descripcion')}}" placeholder="Agrege una descripción del evento" class="form-control" required>
			@else
			<input type="text" name="descripcion" id="descripcion" value="{{$evento->descripcion}}" placeholder="Agrege una descripción del evento" class="form-control" required>
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

<!----------------------------------------------------------------- BOTONES - RETICULA ---------------------------------------------------------->

		<div class="contenedor-botones">
		                
		    <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
		    <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="{{route('EventosAcademicos')}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
		        
		</div>


	</form>

</div>

@endsection
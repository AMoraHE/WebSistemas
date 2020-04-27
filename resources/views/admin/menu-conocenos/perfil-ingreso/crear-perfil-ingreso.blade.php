@extends('layouts.administrador')

@section('title', 'Nuevo Elmento Perfil Ingreso')

@section('content')

<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

<div class="seccion-principal">
	    
	<div class="contenedor-titulo-seccion">

	    <h3>Agregar Datos - Perfil Ingreso</h3>

	</div>

<!-------------------------------------------------------- FORMULARIO CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	<form id="formulario" class="form-group" method="POST" action="/PerfilIngreso">
	  	@csrf

		<div class="formulario"> 
		      
		    <label>Viñeta</label>
		    <input type="text" maxlength="2" name="vineta" id ="viñeta" value="{{old('vineta')}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>
		
		</div>

		@if ($errors->has('vineta'))
	      <span class="invalid-feedback" role="alert">
	          <strong>{{ $errors->first('vineta') }}</strong>
	      </span>
	    @endif

		<div class="formulario"> 

		   <label>Información</label>
		    <textarea type="text" name="elemento" id ="informacion-perfil" placeholder="Ingrese Información Deseada" class="form-control" required>{{old('elemento')}}</textarea>

		</div>

		@if ($errors->has('elemento'))
	      <span class="invalid-feedback" role="alert">
	          <strong>{{ $errors->first('elemento') }}</strong>
	      </span>
	    @endif

<!--------------------------------------------------------------- BOTONES CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

		<div class="contenedor-botones">
		                
		    <a id="save" texto="guardar la información?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
		    <a class="msj" mesanje="cancelar?" href="/Perfil-Ingreso-Lista"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

		</div>

	</form>

</div>

@endsection
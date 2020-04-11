@extends('layouts.administrador')

@section('title', 'Editar Elemento Perfil Ingreso')

@section('content')

<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

<div class="seccion-principal">
	    
	<div class="contenedor-titulo-seccion">

	    <h3>Actualizar Datos</h3>

	</div>

	<form id="formulario" class="form-group" method="POST" action="/PerfilIngreso/{{$perfilingreso->slug}}">
	   	@method('PUT')
	    @csrf

<!-------------------------------------------------------- FORMULARIO CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

		<div class="formulario"> 
		      
		    <label>Viñeta</label>
		    <input type="text" maxlength="2" name="vineta" id ="viñeta" value="{{$perfilingreso->vineta}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>
		
		</div>

		<div class="formulario"> 
		    <label>Información</label>
		    <textarea type="text" name="elemento" id ="informacion-perfil" placeholder="Ingrese Información Deseada" class="form-control" required>{{$perfilingreso->elemento}}</textarea>
		</div>

<!--------------------------------------------------------------- BOTONES CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

		<div class="contenedor-botones">
		                
		    <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
		    <a class="msj" mesanje="Cancelar?" href="/Perfil-Ingreso-Lista"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
		        
		</div>

	</form>

</div>

@endsection
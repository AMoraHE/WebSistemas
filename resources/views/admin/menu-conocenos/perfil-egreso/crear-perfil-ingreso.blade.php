@extends('layouts.administrador')

@section('title', 'Nuevo Elmento Perfil Egreso')

@section('content')

<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

<div class="seccion-principal">
	    
	<div class="contenedor-titulo-seccion">

	    <h3>Agregar Datos</h3>

	</div>

<!-------------------------------------------------------- FORMULARIO CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	<form id="formulario" class="form-group" method="POST" action="/PerfilEgreso">
	    @csrf

		<div class="formulario"> 
		      
			<label>Viñeta</label>
			<input type="text" maxlength="2" name="vineta" id ="viñeta" value="" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>
		   
		</div>

		<div class="formulario"> 
		    <label>Información</label>
		    <textarea type="text" name="elemento" id ="informacion-perfil" placeholder="Ingrese Información Deseada" class="form-control" required></textarea>
		          
		</div>

<!--------------------------------------------------------------- BOTONES CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

		<div class="contenedor-botones">
		                
		    <a id="save" texto="guardar la información?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
		    <a class="msj" mesanje="Cancelar?" href="/Perfil-Egreso-Lista"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

		</div>

	</form>

</div>

@endsection
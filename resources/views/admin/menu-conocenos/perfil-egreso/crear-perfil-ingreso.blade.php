@extends('layouts.administrador')

@section('title', 'Nuevo Elmento Perfil Egreso')

@section('content')

	<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	  <div class="seccion-principal">
	    
	      <div class="contenedor-titulo-seccion">

	        <h3>Agregar Datos</h3>

	    </div>

	    <form class="form-group" method="POST" action="/PerfilEgreso">
	    	@csrf

		    <div class="formulario"> 
		      
		          <label for="">Viñeta</label>
		          <input type="text" maxlength="2" name="vineta" id ="viñeta" value="" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>
		    </div>

		    <div class="formulario"> 
		          <label for="">Información</label>
		          <input type="text" name="elemento" id ="informacion-perfil" value="" placeholder="Ingrese Información Deseada" class="form-control" required>
		    </div>

		    <div class="contenedor-botones">
		                
		        <a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

		        <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>

		    </div>

		</form>

	  </div>

@endsection
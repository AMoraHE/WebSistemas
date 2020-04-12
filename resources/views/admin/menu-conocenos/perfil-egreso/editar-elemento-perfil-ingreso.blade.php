@extends('layouts.administrador')

@section('title', 'Editar Elemento Perfil Egreso')

@section('content')

<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

<div class="seccion-principal">
	    
	 <div class="contenedor-titulo-seccion">

	    <h3>Actualizar Datos - Perfil Egreso</h3>

	</div>

<!-------------------------------------------------------- FORMULARIO CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	<form id="formulario" class="form-group" method="POST" action="/PerfilEgreso/{{$perfilegreso->slug}}">
	    @method('PUT')
	    @csrf

		<div class="formulario"> 
		      
		    <label>Viñeta</label>
		    <input type="text" maxlength="2" name="vineta" id ="viñeta" value="{{$perfilegreso->vineta}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control">
		    
		</div>

		<div class="formulario"> 
		    <label for="">Información</label>
		    <textarea type="text" name="elemento" id ="informacion-perfil" placeholder="Ingrese Información Deseada" class="form-control" required>{{$perfilegreso->elemento}}</textarea>
		</div>

<!--------------------------------------------------------------- BOTONES CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

		<div class="contenedor-botones">
		                
		    <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
		    <a class="msj" mesanje="cancelar?" href="/Perfil-Egreso-Lista"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
		        
		</div>

		</form>

	  </div>

@endsection
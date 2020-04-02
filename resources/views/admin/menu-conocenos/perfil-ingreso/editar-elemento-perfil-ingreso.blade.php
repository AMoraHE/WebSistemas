@extends('layouts.administrador')

@section('title', 'Editar Elemento Perfil Ingreso')

@section('content')

	<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	  <div class="seccion-principal">
	    
	    <div class="contenedor-titulo-seccion">

	        <h3>Actualizar Datos</h3>

	    </div>

	    <form class="form-group" method="POST" action="/PerfilIngreso/{{$perfilingreso->slug}}">
	    @method('PUT')
	    @csrf

		    <div class="formulario"> 
		      
		          <label for="">Viñeta</label>
		          <input type="text" maxlength="2" name="vineta" id ="viñeta" value="{{$perfilingreso->vineta}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>
		    </div>

		    <div class="formulario"> 
		          <label for="">Información</label>
		          <textarea type="text" name="elemento" id ="informacion-perfil" placeholder="Ingrese Información Deseada" class="form-control" required>{{$perfilingreso->elemento}}</textarea>
		    </div>

		    <div class="contenedor-botones">
		                
		        <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>

		        <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>
		        
		    </div>

		</form>

	  </div>

@endsection
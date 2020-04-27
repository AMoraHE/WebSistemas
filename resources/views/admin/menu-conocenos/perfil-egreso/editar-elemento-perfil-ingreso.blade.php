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
		    @if ($errors->any())
		    <input type="text" maxlength="2" name="vineta" id ="viñeta" value="{{old('vineta')}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control">
		    @else
		    <input type="text" maxlength="2" name="vineta" id ="viñeta" value="{{$perfilegreso->vineta}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control">
		    @endif
		    
		</div>

		@if ($errors->has('vineta'))
	      <span class="invalid-feedback" role="alert">
	          <strong>{{ $errors->first('vineta') }}</strong>
	      </span>
	    @endif

		<div class="formulario"> 
			
		    <label for="">Información</label>
		    @if ($errors->any())
		    <textarea type="text" name="elemento" id ="informacion-perfil" placeholder="Ingrese Información Deseada" class="form-control" required>{{old('elemento')}}</textarea>
		    @else
		    <textarea type="text" name="elemento" id ="informacion-perfil" placeholder="Ingrese Información Deseada" class="form-control" required>{{$perfilegreso->elemento}}</textarea>
		    @endif

		</div>

		@if ($errors->has('elemento'))
	      <span class="invalid-feedback" role="alert">
	          <strong>{{ $errors->first('elemento') }}</strong>
	      </span>
	    @endif

<!--------------------------------------------------------------- BOTONES CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

		<div class="contenedor-botones">
		                
		    <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
		    <a class="msj" mesanje="cancelar?" href="/Perfil-Egreso-Lista"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
		        
		</div>

		</form>

	  </div>

@endsection
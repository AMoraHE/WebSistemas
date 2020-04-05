@extends('layouts.administrador')

@section('title', 'Actualizar Elemento Campo Laboral')

@section('content')

<!--------------------------------------------------------------- ACTUALIZAR ELEMNTO CAMPO LABORAL ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Actualizar Datos</h3>

  </div>

<!-----------------------------------------------------------------  FORMULARIO CAMPO LABORAL ---------------------------------------------------------->

  <form class="form-group" method="POST" action="/CampoLaboral/{{$campolaboral->slug}}">
    @method('PUT')
    @csrf

    <div class="formulario"> 

      <label>Viñetas</label>
      <input type="text" maxlength="2" name="vineta" id ="informacion-perfil" value="{{$campolaboral->vineta}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>
    
    </div>

    <div class="formulario"> 

      <label>Información</label>
      <input type="text" name="elemento" id ="informacion-perfil" value="{{$campolaboral->elemento}}" placeholder="Información" class="form-control" required>
        
    </div>

<!------------------------------------------------------------------ BOTONES CAMPO LABORAL -------------------------------------------------------------->

    <div class="contenedor-botones">
                    
      <a onclick="return confirm('¿Desea guardar los cambios?')"><button class="btn" type="submit"><span>Guardar</span></button></a>
      <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="{{route('CampoLaboralLista')}}"><button type="button" class="btn"><span>Cancelar</span></button></a>

    </div>

  </form>

</div>

@endsection
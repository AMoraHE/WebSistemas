@extends('layouts.administrador')

@section('title', 'Actualizar Elemento Campo Laboral')

@section('content')

<!--------------------------------------------------------------- ACTUALIZAR ELEMNTO CAMPO LABORAL ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Actualizar Datos - Campo Laboral</h3>

  </div>

<!-----------------------------------------------------------------  FORMULARIO CAMPO LABORAL ---------------------------------------------------------->

  <form id="formulario" class="form-group" method="POST" action="/CampoLaboral/{{$campolaboral->slug}}">
    @method('PUT')
    @csrf

    <div class="formulario"> 

      <label>Viñetas</label>
      <input type="text" maxlength="2" name="vineta" id ="informacion-perfil" value="{{$campolaboral->vineta}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>
    
    </div>

    <div class="formulario"> 

      <label>Información</label>
      <textarea type="text" name="elemento" id ="informacion-perfil" placeholder="Información" class="form-control" required>{{$campolaboral->elemento}}</textarea>
        
    </div>

<!------------------------------------------------------------------ BOTONES CAMPO LABORAL -------------------------------------------------------------->

    <div class="contenedor-botones">
                    
      <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="{{route('CampoLaboralLista')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

  </form>

</div>

@endsection
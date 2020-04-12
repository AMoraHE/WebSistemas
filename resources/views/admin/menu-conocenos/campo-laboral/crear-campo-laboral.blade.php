@extends('layouts.administrador')

@section('title', 'Nuevo Elemento Campo Laboral')

@section('content')

<!--------------------------------------------------------------- AGREGAR ELEMENTOS CAMPO LABORAL ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Agregar Campo Laboral</h3>

  </div>

<!----------------------------------------------------------------- FORMULARIO CAMPO LABORAL ---------------------------------------------------------->

  <form id="formulario" class="form-group" method="POST" action="/CampoLaboral">
    @csrf

    <div class="formulario"> 

      <label>Viñetas</label>
      <input type="text" maxlength="2" name="vineta" id ="informacion-perfil" value="" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>

    </div>

    <div class="formulario"> 

      <label>Información</label>
      <input type="text" name="elemento" id ="informacion-perfil" value="" placeholder="Información" class="form-control" required>

    </div>

<!----------------------------------------------------------------- BOTONES CAMPO LABORAL ---------------------------------------------------------->

    <div class="contenedor-botones">
                  
      <a id="save" texto="guardar la información?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="{{route('CampoLaboralLista')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

  </form>   

</div>

@endsection
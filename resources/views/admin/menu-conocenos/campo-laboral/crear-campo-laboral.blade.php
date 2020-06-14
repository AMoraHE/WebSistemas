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
      <input type="text" maxlength="2" name="vineta" id ="informacion-perfil" value="{{old('vineta')}}" placeholder="Máximo 2 viñetas: 1-@-*-3-." class="form-control" required>

    </div>

    @if ($errors->has('vineta'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('vineta') }}</strong>
        </span>
    @endif

    <div class="formulario"> 

      <label>Información</label>
      <textarea class="RichText" type="text" name="elemento" id ="informacion-perfil" placeholder="Ingrese Información Deseada" required>{{old('elemento')}}</textarea>

    </div>

    @if ($errors->has('elemento'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('elemento') }}</strong>
        </span>
    @endif

<!----------------------------------------------------------------- BOTONES CAMPO LABORAL ---------------------------------------------------------->

    <div class="contenedor-botones">
                  
      <a id="save" texto="guardar la información?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="{{route('CampoLaboralLista')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

  </form>   

</div>

@endsection
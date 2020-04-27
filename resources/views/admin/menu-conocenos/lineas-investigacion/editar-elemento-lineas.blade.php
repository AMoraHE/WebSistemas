@extends('layouts.administrador')

@section('title', 'Editar Elemento Líneas de Investigación')

@section('content')

<!----------------------------------------------------------------- LINEAS INVESTIGACIÓN---------------------------------------->

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Actualizar Datos - Línea de Investigación</h3>

  </div>

<!----------------------------------------------------------------- FORMULARIO LINEAS INVESTIGACIÓN---------------------------------------->

  <form id="formulario" class="form-group" method="POST" action="/Lineas-Investigacion/{{$lineainvestigacion->slug}}">
    @method('PUT')
    @csrf

    <div class="formulario"> 
        
      <label>Programa</label>
      @if ($errors->any())
      <input type="text" name="programa" id ="viñeta" value="{{old('programa')}}" placeholder="Nombre del Programa" class="form-control" required>
      @else
      <input type="text" name="programa" id ="viñeta" value="{{$lineainvestigacion->programa}}" placeholder="Nombre del Programa" class="form-control" required>
      @endif

    </div>

    @if ($errors->has('programa'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('programa') }}</strong>
        </span>
      @endif

    <div class="formulario"> 

      <label>Líneas de Investigación</label>
      @if ($errors->any())
      <input type="text" name="linea"linea id ="informacion-perfil" value="{{old('linea')}}" placeholder="Nombre de la Línea de Investigación" class="form-control" required>
      @else
      <input type="text" name="linea"linea id ="informacion-perfil" value="{{$lineainvestigacion->linea}}" placeholder="Nombre de la Línea de Investigación" class="form-control" required>
      @endif

    </div>

    @if ($errors->has('linea'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('linea') }}</strong>
        </span>
      @endif

    <div class="formulario"> 
        
      <label>Clave LI TECNM</label>
      @if ($errors->any())
      <input type="text" name="clave" id ="informacion-perfil" value="{{old('clave')}}" placeholder="Clave Línea de Investigación TECNM" class="form-control" required>
      @else
      <input type="text" name="clave" id ="informacion-perfil" value="{{$lineainvestigacion->clave}}" placeholder="Clave Línea de Investigación TECNM" class="form-control" required>
      @endif

    </div>

    @if ($errors->has('clave'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('clave') }}</strong>
        </span>
      @endif

<!----------------------------------------------------------------- BOTONES LINEAS INVESTIGACIÓN---------------------------------------->

    <div class="contenedor-botones">
                
      <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="{{route('LineasInvestigacion')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

  </form>

</div>

@endsection
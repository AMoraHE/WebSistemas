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
      <input type="text" name="programa" id ="viñeta" value="{{$lineainvestigacion->programa}}" placeholder="Nombre del Programa" class="form-control" required>

    </div>

    <div class="formulario"> 

      <label>Líneas de Investigación</label>
      <input type="text" name="linea"linea id ="informacion-perfil" value="{{$lineainvestigacion->linea}}" placeholder="Nombre de la Línea de Investigación" class="form-control" required>

    </div>

    <div class="formulario"> 
        
      <label>Clave LI TECNM</label>
      <input type="text" name="clave" id ="informacion-perfil" value="{{$lineainvestigacion->clave}}" placeholder="Clave Línea de Investigación TECNM" class="form-control" required>

    </div>

<!----------------------------------------------------------------- BOTONES LINEAS INVESTIGACIÓN---------------------------------------->

    <div class="contenedor-botones">
                
      <a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="{{route('LineasInvestigacion')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

  </form>

</div>

@endsection
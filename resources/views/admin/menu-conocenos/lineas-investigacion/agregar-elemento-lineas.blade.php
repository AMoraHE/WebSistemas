@extends('layouts.administrador')

@section('title', 'Crear Elemento Líneas de Investigación')

@section('content')


<div class="seccion-principal">

<!----------------------------------------------------------------- LINEAS INVESTIGACIÓN---------------------------------------->
    
  <div class="contenedor-titulo-seccion">

    <h3>Agregar Datos</h3>

  </div>

<!----------------------------------------------------------------- FORMULARIO LINEAS INVESTIGACIÓN---------------------------------------->

  <form class="form-group" method="POST" action="/Lineas-Investigacion">
    @csrf

    <div class="formulario"> 
          
      <label>Programa</label>
      <input type="text" name="programa" id ="viñeta" value="" placeholder="Nombre del Programa" class="form-control" required>

    </div>

    <div class="formulario">

      <label>Líneas de Investigación</label>
      <input type="text" name="linea" id ="informacion-perfil" value="" placeholder="Nombre de la Línea de Investigación" class="form-control" required>
        
    </div>

    <div class="formulario"> 

        <label>CLave LI TECNM</label>
        <input type="text" name="clave" id ="informacion-perfil" value="" placeholder="Clave Línea de Investigación TECNM" class="form-control" required>

    </div>

<!----------------------------------------------------------------- BOTONES LINEAS INVESTIGACIÓN---------------------------------------->

    <div class="contenedor-botones">
                    
      <a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
      <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="{{route('LineasInvestigacion')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

  </form>

</div>

@endsection

@extends('layouts.administrador')

@section('title', 'Crear Elemento Líneas de Investigación')

@section('content')


<div class="seccion-principal">

<!----------------------------------------------------------------- LINEAS INVESTIGACIÓN---------------------------------------->
    
  <div class="contenedor-titulo-seccion">

    <h3>Agregar Datos - Líneas Investigación</h3>

  </div>

<!----------------------------------------------------------------- FORMULARIO LINEAS INVESTIGACIÓN---------------------------------------->

  <form id="formulario" class="form-group" method="POST" action="/Lineas-Investigacion">
    @csrf

    <div class="formulario"> 
          
      <label>Programa</label>
      <input type="text" name="programa" id ="viñeta" value="Ingeniería en Sistemas Computacionales" placeholder="Nombre del Programa" class="form-control" required>

    </div>

    <div class="formulario">

      <label>Líneas de Investigación</label>
      <input type="text" name="linea" id ="informacion-perfil" value="" placeholder="Nombre de la Línea de Investigación" class="form-control" required>
        
    </div>

    <div class="formulario"> 

        <label>Clave LI TECNM</label>
        <input type="text" name="clave" id ="informacion-perfil" value="" placeholder="Clave Línea de Investigación TECNM" class="form-control" required>

    </div>

<!----------------------------------------------------------------- BOTONES LINEAS INVESTIGACIÓN---------------------------------------->

    <div class="contenedor-botones">
                    
      <a id="save" texto="guardar la información?"><button class="btn guardar" type="submit"><span>Guardar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="{{route('LineasInvestigacion')}}"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

  </form>

</div>

@endsection

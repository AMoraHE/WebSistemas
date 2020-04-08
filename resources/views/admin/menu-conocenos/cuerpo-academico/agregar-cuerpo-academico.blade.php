@extends('layouts.administrador')

@section('title', 'Agregar Elemento Cuerpo Académico')

@section('content')

	<!--------------------------------------------------------------- AGREGAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Crear Cuerpo Académico</h3>

  </div>

  <!---------------------------------------------------------------FORMULARIO AGREGAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

  <form class="form-group" method="POST" action="/CuerposAcademicos">
    @csrf

    <div class="formulario">

      <label>Nombre del CA</label>
      <input type="text" name="nombre" id ="informacion-perfil" value="" placeholder="Nombre del CA" class="form-control" required>
    
    </div>
      
    <div class="formulario"> 

      <label>Grado del CA</label>
      <input type="text" name="grado" id ="informacion-perfil" value="" placeholder="Grado del CA" class="form-control" required>
    
    </div>
      
    <div class="formulario"> 

        <label for="">ID CA</label>
        <input type="text" name="idCA" id ="informacion-perfil" value="" placeholder="ID CA" class="form-control" required>
    
    </div>
      
    <div class="formulario"> 

      <label for="">Clave CA</label>
      <input type="text" name="clave" id ="informacion-perfil" value="" placeholder="Clave CA" class="form-control" required>

    </div>
      
    <div class="formulario">

      <label>Integrantes</label>
      <input type="text" name="integrantes" id ="informacion-perfil" value="" placeholder="Nombre de los integrantes eg: Eduardo, Maria, Carlos" class="form-control" required>
     
    </div>

  <!--------------------------------------------------------------- BOTONES AGREGAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

    <div class="contenedor-botones">
                      
      <a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button type="submit" class="btn agregar"><span>Agregar</span></button></a>
      <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="/CuerposAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
      
    </div>

  </form>

</div>

@endsection
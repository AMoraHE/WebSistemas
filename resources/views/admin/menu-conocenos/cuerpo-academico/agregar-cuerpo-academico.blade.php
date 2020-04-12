@extends('layouts.administrador')

@section('title', 'Agregar Elemento Cuerpo Académico')

@section('content')

	<!--------------------------------------------------------------- AGREGAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Agregar Cuerpo Académico</h3>

  </div>

  <!---------------------------------------------------------------FORMULARIO AGREGAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

  <form id="formulario" class="form-group" method="POST" action="/CuerposAcademicos">
    @csrf

    <div class="formulario">

      <label>Nombre del CA</label>
      <input type="text" name="nombre" id ="informacion-perfil" value="" placeholder="Nombre del CA" class="form-control" required>
    
    </div>
      
    <div class="formulario"> 

      <label>Grado del CA</label>
      <input type="text" name="grado" id ="informacion-perfil" value="" placeholder="Grado del CA ej: Formacion, Consolidado" class="form-control" required>
    
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
      <input type="text" name="integrantes" id ="informacion-perfil" value="" placeholder="Nombre de los integrantes ej: Eduardo, Maria, Carlos" class="form-control" required>
     
    </div>

  <!--------------------------------------------------------------- BOTONES AGREGAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

    <div class="contenedor-botones">
                      
      <a id="save" texto="guardar la información?"><button type="submit" class="btn agregar"><span>Agregar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="/CuerposAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
      
    </div>

  </form>

</div>

@endsection
@extends('layouts.administrador')

@section('title', 'Editar Elemento Cuerpo Académico')

@section('content')

<!----------------------------------------------------------- EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Actualizar Datos</h3>

  </div>

<!----------------------------------------------------------- FORMULARIO EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

  <form method="POST" action="/CuerposAcademicos/{{$CuerposAcademico->slug}}" enctype="multipart/form-data">
    @method('PUT')
		@csrf

    <div class="formulario"> 

      <label>Nombre del CA</label>
      <input type="text" name="nombre" id ="informacion-perfil" value="{{$CuerposAcademico->nombre}}" placeholder="Nombre del CA" class="form-control" required>
    
    </div>
      
    <div class="formulario">

      <label>Grado del CA</label>
      <input type="text" name="grado" id ="informacion-perfil" value="{{$CuerposAcademico->grado}}" placeholder="Grado del CA" class="form-control" required>
    
    </div>
      
    <div class="formulario"> 

        <label>ID CA</label>
        <input type="text" name="idCA" id ="informacion-perfil" value="{{$CuerposAcademico->idCA}}" placeholder="ID CA" class="form-control" required>
    
    </div>
      
    <div class="formulario"> 

      <label>Clave CA</label>
      <input type="text" name="clave" id ="informacion-perfil" value="{{$CuerposAcademico->clave}}" placeholder="Clave CA" class="form-control" readonly>
    
    </div>
      
    <div class="formulario"> 

        <label>Integrantes</label>
        <input type="text" name="integrantes" id ="informacion-perfil" value="{{$CuerposAcademico->integrantes}}" placeholder="Nombre de los integrantes eg: Eduardo, Maria, Carlos" class="form-control" required>
    
    </div>

<!----------------------------------------------------------- BOTON EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 
      
    <div class="contenedor-botones">
                      
      <a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
      <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="/CuerposAcademicos"><button type="button" class="btn"><span>Cancelar</span></button></a>
      
    </div>

  </form>

</div>

@endsection
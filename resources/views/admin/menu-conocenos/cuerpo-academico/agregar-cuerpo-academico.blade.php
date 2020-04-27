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
      <input type="text" name="nombre" id ="informacion-perfil" value="{{old('nombre')}}" placeholder="Nombre del CA" class="form-control" required>
    
    </div>

    @if ($errors->has('nombre'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('nombre') }}</strong>
        </span>
      @endif
      
    <div class="formulario"> 

      <label>Grado del CA</label>
      <input type="text" name="grado" id ="informacion-perfil" value="{{old('grado')}}" placeholder="Grado del CA ej: Formacion, Consolidado" class="form-control" required>
    
    </div>

    @if ($errors->has('grado'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('grado') }}</strong>
        </span>
      @endif
      
    <div class="formulario"> 

        <label for="">ID CA</label>
        <input type="text" name="idCA" id ="informacion-perfil" value="{{old('idCA')}}" placeholder="ID CA" class="form-control" required>
    
    </div>

    @if ($errors->has('idCA'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('idCA') }}</strong>
        </span>
      @endif
      
    <div class="formulario"> 

      <label for="">Clave CA</label>
      <input type="text" name="clave" id ="informacion-perfil" value="{{old('clave')}}" placeholder="Clave CA" class="form-control" required>

    </div>

    @if ($errors->has('clave'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('clave') }}</strong>
        </span>
      @endif
      
    <div class="formulario">

      <label>Integrantes</label>
      <input type="text" name="integrantes" id ="informacion-perfil" value="{{old('integrantes')}}" placeholder="Nombre de los integrantes ej: Eduardo, Maria, Carlos" class="form-control" required>
     
    </div>

    @if ($errors->has('integrantes'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('integrantes') }}</strong>
        </span>
      @endif

  <!--------------------------------------------------------------- BOTONES AGREGAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

    <div class="contenedor-botones">
                      
      <a id="save" texto="guardar la información?"><button type="submit" class="btn agregar"><span>Agregar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="/CuerposAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
      
    </div>

  </form>

</div>

@endsection
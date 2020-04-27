@extends('layouts.administrador')

@section('title', 'Editar Elemento Cuerpo Académico')

@section('content')

<!----------------------------------------------------------- EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Actualizar Datos - CA</h3>

  </div>

<!----------------------------------------------------------- FORMULARIO EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 

  <form id="formulario" method="POST" action="/CuerposAcademicos/{{$CuerposAcademico->slug}}" enctype="multipart/form-data">
    @method('PUT')
		@csrf

    <div class="formulario"> 

      <label>Nombre del CA</label>
      @if ($errors->any())
      <input type="text" name="nombre" id ="informacion-perfil" value="{{old('nombre')}}" placeholder="Nombre del CA" class="form-control" required>
      @else
      <input type="text" name="nombre" id ="informacion-perfil" value="{{$CuerposAcademico->nombre}}" placeholder="Nombre del CA" class="form-control" required>
      @endif
    
    </div>

    @if ($errors->has('nombre'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('nombre') }}</strong>
        </span>
      @endif
      
    <div class="formulario">

      <label>Grado del CA</label>
      @if ($errors->any())
      <input type="text" name="grado" id ="informacion-perfil" value="{{old('grado')}}" placeholder="Grado del CA ej: Formacion, Consolidado" class="form-control" required>
      @else
      <input type="text" name="grado" id ="informacion-perfil" value="{{$CuerposAcademico->grado}}" placeholder="Grado del CA ej: Formacion, Consolidado" class="form-control" required>
      @endif
    
    </div>

    @if ($errors->has('grado'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('grado') }}</strong>
        </span>
      @endif
      
    <div class="formulario"> 

        <label>ID CA</label>
        @if ($errors->any())
        <input type="text" name="idCA" id ="informacion-perfil" value="{{old('idCA')}}" placeholder="ID CA" class="form-control" required>
        @else
        <input type="text" name="idCA" id ="informacion-perfil" value="{{$CuerposAcademico->idCA}}" placeholder="ID CA" class="form-control" required>
        @endif
    
    </div>

    @if ($errors->has('idCA'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('idCA') }}</strong>
        </span>
      @endif
      
    <div class="formulario"> 

      <label>Clave CA</label>
      @if ($errors->any())
      <input type="text" name="clave" id ="informacion-perfil" value="{{old('clave')}}" placeholder="Clave CA" class="form-control">
      @else
      <input type="text" name="clave" id ="informacion-perfil" value="{{$CuerposAcademico->clave}}" placeholder="Clave CA" class="form-control">
      @endif
    
    </div>

    @if ($errors->has('clave'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('clave') }}</strong>
        </span>
      @endif
      
    <div class="formulario"> 

        <label>Integrantes</label>
        @if ($errors->any())
        <input type="text" name="integrantes" id ="informacion-perfil" value="{{old('integrantes')}}" placeholder="Nombre de los integrantes eg: Eduardo, Maria, Carlos" class="form-control" required>
        @else
        <input type="text" name="integrantes" id ="informacion-perfil" value="{{$CuerposAcademico->integrantes}}" placeholder="Nombre de los integrantes eg: Eduardo, Maria, Carlos" class="form-control" required>
        @endif
    
    </div>

    @if ($errors->has('integrantes'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('integrantes') }}</strong>
        </span>
      @endif

<!----------------------------------------------------------- BOTON EDITAR SECCION CUERPO ACADEMICO ----------------------------------------------------------> 
      
    <div class="contenedor-botones">
                      
      <a id="save" texto="guardar cambios?"><button type="submit" class="btn guardar"><span>Guardar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="/CuerposAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>
      
    </div>

  </form>

</div>

@endsection
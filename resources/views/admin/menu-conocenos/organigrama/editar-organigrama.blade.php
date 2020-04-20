@extends('layouts.administrador')

@section('title', 'Editar Elemento Organigrama')

@section('content')

<!--------------------------------------------------------------- EDITAR ELEMENTOS ORGANIGRAMA ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

      <h3>Actualizar Datos - Organigrama</h3>

  </div>

  <div class="formulario">

    <label>Tamaño de imagen recomendado minimo: 500px de ancho y 500px de alto - Peso de la Imagen menor a 512 Kb</label>
          
  </div>

  <form id="formulario" method="POST" action="/Organigrama/{{$Organigrama->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

<!---------------------------------------------------------------- CARGAR IMG ORGANIGRAMA ---------------------------------------------------------------> 

    <div class="contenedor-cargar-img">

      <div class="contenedor-txt-seccion">
              
        <label>Subir Foto del Personal</label>

      </div>

      <div class="contenedor-boton-cargar">

        <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>     
        <input id="file-upload" onchange='cambiar()' name="imgOrg" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;'/>              
              
      </div>

      <div class="contenedor-img-seccion-cuadrado">
              
        <img id="img-pre" src="/images/organigrama/{{$Organigrama->foto}}">

      </div>
              
    </div>

    <div id="info-img">No se Eligió Archivo</div>

    @if ($errors->has('imgOrg'))
      <span class="invalid-feedback" role="alert">

        <strong>{{$errors->first('imgOrg')}}</strong>
        <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong> -->
      </span>
    @endif


<!---------------------------------------------------------------- FORMULARIO ORGANIGRAMA --------------------------------------------------------------->
 
  <div class="formulario">

    <label>Área</label>
    <input type="text" name="area_id" id ="area" value="{{$areas->nombre}}" disabled class="form-control" required>
  
  </div>

  @if ($errors->has('area_id'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('area_id') }}</strong>
      </span>
    @endif

  <div class="formulario"> 

    <label>Puesto</label>
    @if ($errors->any())
    <input type="text" name="puesto" id ="puesto" value="{{old('puesto')}}" class="form-control" required>
    @else
    <input type="text" name="puesto" id ="puesto" value="{{$Organigrama->puesto}}" class="form-control" required>
    @endif
  
  </div>

  @if ($errors->has('puesto'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('puesto') }}</strong>
      </span>
    @endif

  <div class="formulario">

    <label>Nombre</label>
    @if ($errors->any())
    <input type="text" name="integrante" id ="informacion-integrante" value="{{old('integrante')}}" placeholder="Nombre del Integrante" class="form-control" required>
    @else
    <input type="text" name="integrante" id ="informacion-integrante" value="{{$Organigrama->integrante}}" placeholder="Nombre del Integrante" class="form-control" required>
    @endif
  
  </div>

  @if ($errors->has('integrante'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('integrante') }}</strong>
      </span>
    @endif

  <!------------------------- SELECT GENERO ------------------------>

  <div class="formulario">

    <label>Género del Integrante</label>

    <select name="genero_id" id ="genero" class="genero" required> 

      @if($Organigrama->genero === 'H')
      <option value="H">Hombre</option>
      <option value="M">Mujer</option>
      @else
      <option value="M">Mujer</option>
      <option value="H">Hombre</option>
      @endif

    </select>
  
  </div>

  @if ($errors->has('genero_id'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('genero_id') }}</strong>
      </span>
    @endif

  <div class="formulario">

    <label>Correo Electrónico</label>
    @if ($errors->any())
    <input type="email" name="correo" id="correo" value="{{old('correo')}}" placeholder="Ej: usuario@servidor.com" required>
    @else
    <input type="email" name="correo" id="correo" value="{{$Organigrama->correo}}" placeholder="Ej: usuario@servidor.com" required>
    @endif
        
  </div>

  @if ($errors->has('correo'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('correo') }}</strong>
      </span>
    @endif

<!---------------------------------------------------------------- BOTONES ORGANIGRAMA --------------------------------------------------------------->

        <div class="contenedor-botones">
                    
              <a id="save" texto="guardar cambios?"><button type="submit" class="btn guardar"><span>Guardar</span></button></a>
              <a class="msj" mesanje="cancelar?" href="/Organigrama"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

      </div>

    </form>

  </div>


@endsection
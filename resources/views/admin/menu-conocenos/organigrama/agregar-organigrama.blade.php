@extends('layouts.administrador')

@section('title', 'Agregar Elementos Organigrama')

@section('content')

<!--------------------------------------------------------------- AGREGAR ELEMENTOS ORGANIGRAMA ----------------------------------------------------------> 

<div class="seccion-principal">
    
  <div class="contenedor-titulo-seccion">

    <h3>Agregar Datos - Organigrama</h3>

  </div>
  
<!---------------------------------------------------------------- CARGAR IMG ORGANIGRAMA ---------------------------------------------------------------> 

  <div class="formulario">

    <label>Tamaño mínimo de la imagen recomendado: 500 x 500 pixeles. Tamaño máximo del archivo: 512KB.</label>
          
  </div>

  <form id="formulario" class="form-group" method="POST" action="/Organigrama" enctype="multipart/form-data">
    @csrf

    <div class="contenedor-cargar-img">

      <div class="contenedor-txt-seccion">
            
        <label>Seleccionar imagen</label>

      </div>

      <div class="contenedor-boton-cargar">

        <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
        <input required id="file-upload" name="imgOrg" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />
                      
      </div>
                  
      <div class="contenedor-img-seccion-cuadrado">
            
        <img id="img-pre" src="img/LogoNuevaImagen.png">

      </div>
            

    </div>

    <div id="info-img">No se eligió archivo</div>

    @if ($errors->has('imgOrg'))
      <span class="invalid-feedback" role="alert">

        <strong>{{$errors->first('imgOrg')}}</strong>
        <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong> -->
      </span>
    @endif

  <!---------------------------------------------------------------- FORMULARIO ORGANIGRAMA ---------------------------------------------------------------> 

  <!------------------------- SELECT ÁREA ------------------------>

    <div class="formulario"> 

      <label>Área</label>
      
      <select name="area_id" id ="area" class="genero" required>     
        
        <option value="">--Elija el Área--</option>
        
        @foreach ($areas as $area)

        <option value="{{$area->id}}">{{$area->nombre}}</option>

        @endforeach

      </select>

    </div>

    @if ($errors->has('area_id'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('area_id') }}</strong>
      </span>
    @endif

    <!---------------------- AGREGAR DATOS -------------------------> 

    <div class="formulario"> 

      <label>Puesto</label>
      <input type="text" name="puesto" id ="puesto" value="{{old('puesto')}}" placeholder="Puesto del Integrante" class="form-control" required>

    </div>

    @if ($errors->has('puesto'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('puesto') }}</strong>
      </span>
    @endif

    <div class="formulario"> 

      <label>Nombre</label>
      <input type="text" name="nombre" id ="informacion-integrante" value="{{old('nombre')}}" placeholder="Nombre del Integrante" class="form-control" required>
        
    </div>

    @if ($errors->has('nombre'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('nombre') }}</strong>
      </span>
    @endif

  <!------------------------- SELECT GENERO ------------------------>

    <div class="formulario"> 

      <label>Género del Integrante</label>

      <select name="genero_id" id ="genero" class="genero" required>

        <option value="">--Elija el genéro--</option>
        <option value="H">Hombre <i class="fas fa-male"></i></option>
        <option value="M">Mujer <i class="fas fa-female"></i></option>
      
      </select>
    
    </div>

    @if ($errors->has('genero_id'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('genero_id') }}</strong>
      </span>
    @endif

    <div class="formulario">

      <label>Correo Electrónico</label>
      <input type="email" name="correo" id="correo" value="{{old('correo')}}" placeholder="Ej: usuario@servidor.com" required>
          
    </div>

    @if ($errors->has('correo'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('correo') }}</strong>
      </span>
    @endif

  <!---------------------------------------------------------------- BOTONES ORGANIGRAMA ---------------------------------------------------------------> 

    <div class="contenedor-botones">
                    
      <a id="save" texto="guardar la información?"><button type="submit" class="btn agregar"><span>Agregar</span></button></a>
      <a class="msj" mesanje="cancelar?" href="/Organigrama"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

    </div>

  </form>

</div>

@endsection
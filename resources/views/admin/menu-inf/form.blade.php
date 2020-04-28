<!----------------------------------------------------------------- CREAR LABORATORIOS -------------------------------------------------------->

@csrf
<div class="formulario">

    <label>Tamaño mínimo de la imagen recomendado: 1100 x 450 pixeles. Tamaño máximo del archivo: 1MB.</label>

</div>

<!----------------------------------------------------------------- IMG LABORATORIOS -------------------------------------------------------->

<div class="contenedor-cargar-img">

  <div class="contenedor-txt-seccion">

    <label>Seleccionar imagen</label>

  </div>

  <div class="contenedor-boton-cargar">

    <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
    <input id="file-upload" name="imgInicio" value="/img/slider/" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

  </div>

  <div class="contenedor-img-seccion-rectangular">

    <img id="img-pre" src="/img/LogoNuevaImagenGrande.png">

  </div>

</div>

<div id="info-img">No se eligió archivo</div>

@if ($errors->has('imgInicio'))
            
  <span class="invalid-feedback" role="alert">
    
    <strong>{{$errors->first('imgInicio')}}</strong>
    <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong> -->
    
  </span>

@endif
      
<!----------------------------------------------------------------- FORMULARIO LABORATORIOS ---------------------------------------------------------->

<div class="formulario">

  <label>Título del Laboratorio</label>
  <input type="text" name="nombre" value="{{old('nombre')}}" placeholder="Título Laboratorio">

</div>

  @if ($errors->has('nombre'))
            
    <span class="invalid-feedback" role="alert">
      
      <strong>{{ $errors->first('nombre') }}</strong>
    
    </span>

  @endif



<div class="formulario">

  <label>Descripción</label>
  <textarea name="descripcion" placeholder="Descripcion">{{old('descripcion')}}</textarea>

</div>

  @if ($errors->has('descripcion'))
    
    <span class="invalid-feedback" role="alert">

        <strong>{{ $errors->first('descripcion') }}</strong>

    </span>
  
  @endif



<div class="formulario">

  <label>responsable</label>
  <input type="text" name="responsable" value="{{old('responsable')}}">

</div>

  @if ($errors->has('responsable'))
            
    <span class="invalid-feedback" role="alert">
      
      <strong>{{ $errors->first('responsable') }}</strong>
    
    </span>

  @endif



<div class="formulario">

  <label>Correo</label>
  <input type="email" name="correo" value="{{old('correo')}}">

</div>

  @if ($errors->has('correo'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('correo') }}</strong>

    </span>

  @endif



<div class="formulario">

  <label>Identificador</label>
  <input type="text" name="slug" value="{{$identificador}}" readonly>

</div>

  @if ($errors->has('slug'))
            
    <span class="invalid-feedback" role="alert">
          
      <strong>{{ $errors->first('slug') }}</strong>

    </span>

  @endif


<!----------------------------------------------------------------- CREAR LABORATORIOS -------------------------------------------------------->

@csrf
<div class="formulario">

    <label>Tamaño mínimo de la imagen recomendado: 1100 x 450 pixeles. Tamaño máximo del archivo: 1MB.</label>

</div>

<!----------------------------------------------------------------- IMG GALERIA -------------------------------------------------------->

<div class="contenedor-cargar-img">

  <div class="contenedor-txt-seccion">

    <label>Seleccionar imagen</label>

  </div>

  <div class="contenedor-boton-cargar">

    <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
    <input id="file-upload" name="imgPrin" value="/img/slider/" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

  </div>

  <div class="contenedor-img-seccion-rectangular">

    <img id="img-pre" src="/img/LogoNuevaImagenGrande.png">

  </div>

</div>

<div id="info-img">No se eligió archivo</div>

@if ($errors->has('imgPrin'))
            
  <span class="invalid-feedback" role="alert">
    <strong>{{$errors->first('imgPrin')}}</strong>
    <!-- <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong> -->
    
  </span>

@endif
      
<!----------------------------------------------------------------- FORMULARIO GALERIA ---------------------------------------------------------->
<div class="formulario">

  <label>titulo</label>
  <input type="text" name="titulo" placeholder="Titulo de la galería" value="{{old('titulo')}}" required>

</div>

  @if ($errors->has('titulo'))
            
    <span class="invalid-feedback" role="alert">
      
      <strong>{{ $errors->first('titulo') }}</strong>
    
    </span>

  @endif

<div class="formulario">

  <label>Descripción</label>
  <textarea class="RichText" name="descripcion" placeholder="Descripcion de la galería">{{old('descripcion')}}</textarea>

</div>

  @if ($errors->has('descripcion'))
    
    <span class="invalid-feedback" role="alert">

        <strong>{{ $errors->first('descripcion') }}</strong>

    </span>
  
  @endif


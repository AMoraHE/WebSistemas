
<!----------------------------------------------------------------- EDITAR LABORATORIOS -------------------------------------------------------->

<div class="formulario">

  <label>Tamaño de imagen recomendado: 1100px de ancho y 450px de alto</label>

</div>

<!----------------------------------------------------------------- IMG LABORATORIOS -------------------------------------------------------->

<div class="contenedor-cargar-img">

  <div class="contenedor-txt-seccion">

    <label>Cargar IMG</label>

  </div>

  <div class="contenedor-boton-cargar">

    <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
    <input id="file-upload" name="imgPrin" value="" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

  </div>

  <div class="contenedor-img-seccion">

    <img id="img-pre" src="/images/galeria/album/{{$album->imgPrin}}">

  </div>

  @if ($errors->has('imgPrin'))

    <span class="invalid-feedback" role="alert">

      <strong>El archivo seleccionado no es válido, seleccione un archivo JPG, PNG, GIF, TIFF, BMP</strong>

    </span>

  @endif

</div>

<div id="info-img">No se Eligió Archivo</div>

<!----------------------------------------------------------------- FORMULARIO LABORATORIOS ---------------------------------------------------------->

<div class="formulario">

  <label>Título</label>

  @if ($errors->any())
  <input type="text" name="titulo" id ="" value="{{old('titulo')}}"  class="form-control" required>
  @else
  <input type="text" name="titulo" id ="" value="{{$album->titulo}}"  class="form-control" required>
  @endif

</div>

  @if ($errors->has('titulo'))
  <span class="invalid-feedback" role="alert">

    <strong>{{ $errors->first('titulo') }}</strong>

  </span>

  @endif

<div class="formulario">

  <label>Descripción</label>

  @if ($errors->any())
  <textarea name="descripcion" placeholder="Inserte Descripción de la galería ... " required>{{old('descripcion')}}</textarea>
  @else
  <textarea name="descripcion" placeholder="Inserte Descripción de la galería ... " required>{{$album->descripcion}}</textarea>
  @endif

</div>

  @if ($errors->has('descripcion'))

  <span class="invalid-feedback" role="alert">

    <strong>{{ $errors->first('descripcion') }}</strong>

  </span>

  @endif
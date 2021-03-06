
<!----------------------------------------------------------------- EDITAR LABORATORIOS -------------------------------------------------------->

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

    <img id="img-pre" src="/images/infra/{{$infra->imgInicio}}">

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

  <label>Título de Laboratorio</label>

  @if ($errors->any())
  <input type="text" name="nombre" id ="" value="{{old('nombre')}}"  class="form-control" required>
  @else
  <input type="text" name="nombre" id ="" value="{{$infra->nombre}}"  class="form-control" required>
  @endif
</div>

  @if ($errors->has('nombre'))
  <span class="invalid-feedback" role="alert">

    <strong>{{ $errors->first('nombre') }}</strong>

  </span>

  @endif

<div class="formulario">

  <label>Responsable</label>

  @if ($errors->any())
  <input type="text" name="responsable" id ="" value="{{old('responsable')}}"  class="form-control" required>
  @else
  <input type="text" name="responsable" id ="" value="{{$infra->responsable}}"  class="form-control" required>

</div>

  @endif

  @if ($errors->has('responsable'))
  <span class="invalid-feedback" role="alert">

    <strong>{{ $errors->first('responsable') }}</strong>

  </span>

  @endif

<div class="formulario">

  <label>Correo Electrónico</label>
  @if ($errors->any())
  <input type="email" name="correo" id="correo" value="{{old('correo')}}" required>
  @else
  <input type="email" name="correo" id="correo" value="{{$infra->correo}}" required>
  @endif

</div>

  @if ($errors->has('correo'))

  <span class="invalid-feedback" role="alert">

    <strong>{{ $errors->first('correo') }}</strong>

  </span>

  @endif

<div class="formulario">

  <label>Descripción</label>

  @if ($errors->any())
  <textarea class="RichText" name="descripcion" placeholder="Inserte Descripción del Laboratorio ... " required>{{old('descripcion')}}</textarea>
  @else
  <textarea class="RichText" name="descripcion" placeholder="Inserte Descripción del Laboratorio ... " required>{{$infra->descripcion}}</textarea>
  @endif

</div>

  @if ($errors->has('descripcion'))

  <span class="invalid-feedback" role="alert">

    <strong>{{ $errors->first('descripcion') }}</strong>

  </span>

  @endif
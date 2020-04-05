<div class="formulario">
  <label for="">Tamaño de imagen recomendado: 1100px de ancho y 450px de alto</label>
</div>


<div class="contenedor-cargar-img">
  <div class="contenedor-txt-seccion">
    <label for="">Cargar IMG</label>
  </div>

  <div class="contenedor-boton-cargar">
    <label for="file-upload" class="subir">
      <i class="fas fa-cloud-upload-alt"></i> Subir Archivo
    </label>

    <input id="file-upload" name="imgInicio" value="/img/slider/" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    <div id="info-img">No se Eligió Archivo</div>
  </div>


  <div class="contenedor-img-seccion">
    <img id="img-pre" src="/images/infra/{{$infra->imgInicio}}">
  </div>

  @if ($errors->has('imgInicio'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('imgInicio') }}</strong>
    </span>
  @endif
</div>

<!----------------------------------------------------------------- Información ---------------------------------------------------------->


<div class="formulario">
<label for="">Responsable</label>
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
<label for="">Correo Electrónico</label>
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
<label for="">Descripción:</label>
@if ($errors->any())
<textarea name="descripcion" placeholder="Inserte Descripción del Laboratorio ... " required>{{old('descripcion')}}</textarea>
@else
<textarea name="descripcion" placeholder="Inserte Descripción del Laboratorio ... " required>{{$infra->descripcion}}</textarea>
@endif
</div>

@if ($errors->has('descripcion'))
  <span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('descripcion') }}</strong>
  </span>
@endif

<div class="contenedor-img-seccion">
<table>
<tr>
<td>
  <label>Imagen 1</label>
  <input type="file" name="img1">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img1}}"></td>
<td>
  @if ($errors->has('img1'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('img1') }}</strong>
    </span>
  @endif
</td>
</tr>
<tr>
<td>
  <label>Imagen 2</label>
  <input type="file" name="img2">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img2}}"></td>
<td>
  @if ($errors->has('img2'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('img2') }}</strong>
    </span>
  @endif
</td>
</tr>
<tr>
<td>
  <label>Imagen 3</label>
  <input type="file" name="img3">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img3}}"></td>
<td>
  @if ($errors->has('img3'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('img3') }}</strong>
    </span>
  @endif
</td>
</tr>
<tr>
<td>
  <label>Imagen 4</label>
  <input type="file" name="img4">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img4}}"></td>
<td>
  @if ($errors->has('img4'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('img4') }}</strong>
    </span>
  @endif
</td>
</tr>
<tr>
<td>
  <label>Imagen 5</label>
  <input type="file" name="img5">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img5}}"></td>
<td>
  @if ($errors->has('img5'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('img5') }}</strong>
    </span>
  @endif
</td>
</tr>
<tr>
<td>
  <label>Imagen 6</label>
  <input type="file" name="img6">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img6}}"></td>
<td>
  @if ($errors->has('img6'))
    <span class="invalid-feedback" role="alert">
      <strong>{{ $errors->first('img6') }}</strong>
    </span>
  @endif
</td>
</tr>
</table>
</div>

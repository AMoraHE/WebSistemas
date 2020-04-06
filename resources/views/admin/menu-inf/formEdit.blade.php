
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
    <input id="file-upload" name="imgInicio" value="/img/slider/" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

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

<div id="info-img">No se Eligió Archivo</div>

<!----------------------------------------------------------------- FORMULARIO LABORATORIOS ---------------------------------------------------------->

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

<!----------------------------------------------------------------- MINI GALERIA LABORATORIOS ---------------------------------------------------------->

  <div class="formulario">

    <label>Mini Galería</label>

  </div>

<!-------------------------------- MINI GALERIA LABORATORIOS - Imagen 1 ----------------------------->

  <div class="formulario">

    <label>Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-txt-seccion">

      <label>Cargar IMG</label>

    </div>

    <div class="contenedor-boton-cargar">

      <label for="file-upload-img1" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
      <input id="file-upload-img1" name="img1" value="/img/slider/" onchange='cambiarimg1()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    </div>

    <div class="contenedor-img-seccion">

      <img id="img-pre-img1" src="/images/infra/{{$infra->img1}}">

    </div>

    @if ($errors->has('img1'))

      <span class="invalid-feedback" role="alert">

        <strong>{{ $errors->first('img1') }}</strong>

      </span>

    @endif

</div>

<div id="info-img1" class="info-img-infraestructura">No se Eligió Archivo</div>

<!-------------------------------- MINI GALERIA LABORATORIOS - Imagen 2 ----------------------------->

  <div class="formulario">

    <label>Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-txt-seccion">

      <label>Cargar IMG</label>

    </div>

    <div class="contenedor-boton-cargar">

      <label for="file-upload-img2" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
      <input id="file-upload-img2" name="img2" value="/img/slider/" onchange='cambiarimg2()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    </div>

    <div class="contenedor-img-seccion">

      <img id="img-pre-img2" src="/images/infra/{{$infra->img2}}">

    </div>

  @if ($errors->has('img2'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('img2') }}</strong>

    </span>

  @endif

  </div>

  <div id="info-img2" class="info-img-infraestructura">No se Eligió Archivo</div>

<!-------------------------------- MINI GALERIA LABORATORIOS - Imagen 3 ----------------------------->

  <div class="formulario">

    <label>Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-txt-seccion">

      <label>Cargar IMG</label>

    </div>

    <div class="contenedor-boton-cargar">

      <label for="file-upload-img3" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
      <input id="file-upload-img3" name="img3" value="/img/slider/" onchange='cambiarimg3()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    </div>

    <div class="contenedor-img-seccion">

      <img id="img-pre-img3" src="/images/infra/{{$infra->img3}}">

    </div>

  @if ($errors->has('img3'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('img3') }}</strong>

    </span>

  @endif

  </div>

  <div id="info-img3" class="info-img-infraestructura">No se Eligió Archivo</div>

<!-------------------------------- MINI GALERIA LABORATORIOS - Imagen 4 ----------------------------->

  <div class="formulario">

    <label>Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-txt-seccion">

      <label>Cargar IMG</label>

    </div>

    <div class="contenedor-boton-cargar">

      <label for="file-upload-img4" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
      <input id="file-upload-img4" name="img4" value="/img/slider/" onchange='cambiarimg4()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    </div>

    <div class="contenedor-img-seccion">

      <img id="img-pre-img4" src="/images/infra/{{$infra->img4}}">

    </div>

  @if ($errors->has('img4'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('img4') }}</strong>

    </span>

  @endif

  </div>

  <div id="info-img4" class="info-img-infraestructura">No se Eligió Archivo</div>

<!-------------------------------- MINI GALERIA LABORATORIOS - Imagen 5 ----------------------------->

 <div class="formulario">

    <label>Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-txt-seccion">

      <label>Cargar IMG</label>

    </div>

    <div class="contenedor-boton-cargar">

      <label for="file-upload-img5" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
      <input id="file-upload-img5" name="img5" value="/img/slider/" onchange='cambiarimg5()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    </div>

    <div class="contenedor-img-seccion">

      <img id="img-pre-img5" src="/images/infra/{{$infra->img5}}">

    </div>

  @if ($errors->has('img5'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('img5') }}</strong>

    </span>

  @endif

  </div>

  <div id="info-img5" class="info-img-infraestructura">No se Eligió Archivo</div>

<!-------------------------------- MINI GALERIA LABORATORIOS - Imagen 6 ----------------------------->

  <div class="formulario">

    <label>Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-txt-seccion">

      <label>Cargar IMG</label>

    </div>

    <div class="contenedor-boton-cargar">

      <label for="file-upload-img6" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i> Subir Archivo</label>
      <input id="file-upload-img6" name="img6" value="/img/slider/" onchange='cambiarimg6()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    </div>

    <div class="contenedor-img-seccion">

      <img id="img-pre-img6" src="/images/infra/{{$infra->img6}}">

    </div>


  @if ($errors->has('img6'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('img6') }}</strong>

    </span>

  @endif
  
  </div>

  <div id="info-img6" class="info-img-infraestructura">No se Eligió Archivo</div>

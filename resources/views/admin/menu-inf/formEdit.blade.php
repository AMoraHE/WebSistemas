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
</div>

<!----------------------------------------------------------------- Información ---------------------------------------------------------->


<div class="formulario">
<label for="">Responsable</label>
<input type="text" name="responsable" id ="" value="{{$infra->responsable}}"  class="form-control" required>
</div>

<div class="formulario">
<label for="">Correo Electrónico</label>
<input type="email" name="correo" id="correo" value="{{$infra->correo}}" required>
</div>


<div class="formulario">
<label for="">Descripción:</label>
<textarea name="descripcion" placeholder="Inserte Descripción del Laboratorio ... " required>{{$infra->descripcion}}</textarea>
</div>

<div class="contenedor-img-seccion">
<table>
<tr>
<td>
  <label>Imagen 1</label>
  <input type="file" name="img1">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img1}}"></td>
</tr>
<tr>
<td>
  <label>Imagen 2</label>
  <input type="file" name="img2">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img2}}"></td>
</tr>
<tr>
<td>
  <label>Imagen 3</label>
  <input type="file" name="img3">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img3}}"></td>
</tr>
<tr>
<td>
  <label>Imagen 4</label>
  <input type="file" name="img4">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img4}}"></td>
</tr>
<tr>
<td>
  <label>Imagen 5</label>
  <input type="file" name="img5">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img5}}"></td>
</tr>
<tr>
<td>
  <label>Imagen 6</label>
  <input type="file" name="img6">
</td>
<td><img id="img-pre" src="/images/infra/{{$infra->img6}}"></td>
</tr>
</table>
</div>

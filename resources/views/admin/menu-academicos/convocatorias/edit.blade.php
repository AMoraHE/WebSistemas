@extends('layouts.administrador')

@section('title', 'Editar convocatoria')

@section('content')

<!----------------------------------------------------------------- EDITAR convocatorias ---------------------------------------------------------->


<div class="seccion-principal">
	<div class="contenedor-titulo-seccion">
		<h3>Edita convocatoria</h3>
	</div>

<!---------------------------convocatorias------------------------>
 <form class="form-goup" files="true" method="POST" action="/ConvocatoriasAcademicos/{{$convocatorias->slug}}" enctype="multipart/form-data">
    @method('PUT')
    {{csrf_field()}}

<!----------------------------IMAGEN------------------------->
	<div class="formulario">

    <label>Tamaño de imagen recomendado: 1100px de ancho y 450px de alto</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-txt-seccion">

      <label>Cargar IMG</label>

    </div>


    <div class="contenedor-boton-cargar">

      <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i>Subir Imágen</label>

      <input id="file-upload" onchange='cambiar()' name="image" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' />

    </div>

    <div class="contenedor-img-seccion">

      <img id="img-pre" src="/images/convocatoria/{{$convocatorias->newimage}}">

    </div>

  </div>

  <div id="info-img">No se Eligió Archivo</div>

  @if ($errors->has('image'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('image') }}</strong>

    </span>

  @endif

<!----------------------------------------------------------------- FORMULARIO convocatoria ---------------------------------------------------------->

<!-------------------------------------------------->
  <div class="formulario">

    <label>Aplicacion</label>
    @if ($errors->any())
    <input type="text" name="aplicacion" id="aplicacion" value="{{old('aplicacion')}}" placeholder="Reescriba la aplicación seleccionada" class="form-control" required>
    @else
    <input type="text" name="aplicacion" id="aplicacion" value="{{$convocatorias->aplicacion}}" placeholder="Reescriba la aplicación seleccionada" class="form-control" required>
    @endif

  </div>

  @if ($errors->has('aplicacion'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('aplicacion') }}</strong>

    </span>

  @endif

<!--------------------------convocatoria---------------------------->
  <div class="formulario">

    <label>Convocatoria</label>
    @if ($errors->any())
    <input type="text" name="convocatoria" id="convocatoria" value="{{old('convocatoria')}}" placeholder="Reescriba la convocatoria seleccionada" class="form-control" required>
    @else
    <input type="text" name="convocatoria" id="convocatoria" value="{{$convocatorias->convocatoria}}" placeholder="Reescriba la convocatoria seleccionada" class="form-control" required>
    @endif

  </div>

  @if ($errors->has('convocatoria'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('convocatoria') }}</strong>

    </span>

  @endif


<!---------------------------DESCRIPCION---------------------------------------------------->
  <div class="formulario">

    <label>Descripción</label>
    @if ($errors->any())
    <textarea placeholder="Reescriba la descripción seleccionada" name="descripcion" required>{{old('descripcion')}}</textarea>
    @else
    <textarea placeholder="Reescriba la descripción seleccionada" name="descripcion" required>{{$convocatorias->descripcion}}</textarea>
    @endif

  </div>

  @if ($errors->has('descripcion'))

    <span class="invalid-feedback" role="alert">

      <strong>{{ $errors->first('descripcion') }}</strong>

    </span>

  @endif
<!----------------------------------------------------------------- BOTONES convocatorias ---------------------------------------------------------->

	<div class="contenedor-botones">
		<a onclick="return confirm('¿Desea guardar los cambios realizados?')"><button class="btn" type="submit" ><span>Guardar</span></button></a>
    <a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/ProyectosAcademicos"><button type="button" class="btn"><span>Cancelar</span></button></a>

	</div>
</form>
</div>

@endsection

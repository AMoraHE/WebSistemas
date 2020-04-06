@extends('layouts.administrador')

@section('title', 'Editar proyecto')

@section('content')



<div class="seccion-principal">
	<div class="contenedor-titulo-seccion">
		<h3>Edita proyectos</h3>
	</div>

<!---------------------------PROYECTOS------------------------>
 <form class="form-goup" files="true" method="POST" action="/ProyectosAcademicos/{{$proyecto->slug}}" enctype="multipart/form-data">
    @method('PUT')
    {{csrf_field()}}

<!----------------------------IMAGEN------------------------->
	<div class="formulario">

    <label>Tamaño de imagen recomendado: 250px de ancho y 250px de alto</label>

  </div>

  <div class="contenedor-cargar-img">

    <div class="contenedor-boton-cargar">

      <label for="file-upload" class="subir"><i class="icono-izquierda fas fa-cloud-upload-alt"></i>Subir Imágen</label>

      <input id="file-upload" onchange='cambiar()' name="image" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

    </div>

    <div class="contenedor-img-seccion">

      <img id="img-pre" src="/images/proyectos/{{$proyecto->newimage}}">

    </div>

  </div>

  <div id="info-img">No se Eligió Archivo</div>

  @if ($errors->has('image'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('image') }}</strong>
      </span>
    @endif

<!--------------------APLICACION------------------------------>
<div class="formulario">

    <label>Aplicacion</label>
    @if ($errors->has('image'))
    <input type="text" name="aplicacion" id="aplicacion" value="{{old('aplicacion')}}" placeholder="Reescriba la aplicación seleccionada" class="form-control" required>
    @else
    <input type="text" name="aplicacion" id="aplicacion" value="{{$proyecto->aplicacion}}" placeholder="Reescriba la aplicación seleccionada" class="form-control" required>
    @endif

  </div>

  @if ($errors->has('aplicacion'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('aplicacion') }}</strong>
      </span>
    @endif

<!--------------------------PROYECTO---------------------------->
<div class="formulario">

    <label>Proyecto</label>
    @if ($errors->has('image'))
    <input type="text" name="proyecto" id="proyecto" value="{{old('proyecto')}}" placeholder="Reescriba el proyecto seleccionado" class="form-control" required>
    @else
    <input type="text" name="proyecto" id="proyecto" value="{{$proyecto->proyecto}}" placeholder="Reescriba el proyecto seleccionado" class="form-control" required>
    @endif

  </div>

  @if ($errors->has('proyecto'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('proyecto') }}</strong>
      </span>
    @endif

<!------------------------------DESARROLLADORES-------------------------->
<div class="formulario">

    <label for="">Desarrolladores</label>
    @if ($errors->has('image'))
    <textarea style="height: 100px;" placeholder="Reescriba los desarrolladores seleccionados" name="desarrolladores" required>{{old('desarrolladores')}}</textarea>
    @else
    <textarea style="height: 100px;" placeholder="Reescriba los desarrolladores seleccionados" name="desarrolladores" required>{{$proyecto->desarrolladores}}</textarea>
    @endif

  </div>

  @if ($errors->has('desarrolladores'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('desarrolladores') }}</strong>
      </span>
    @endif

<!--------------------------------OBEJTIVO-------------------------->

<div class="formulario">

    <label for="">Objetivo</label>
    @if ($errors->has('image'))
    <textarea style="height: 100px;" placeholder="Reescriba los objetivos seleccionados" name="objetivo" required>{{old('objetivo')}}</textarea>
    @else
    <textarea style="height: 100px;" placeholder="Reescriba los objetivos seleccionados" name="objetivo" required>{{$proyecto->objetivo}}</textarea>
    @endif

  </div>

  @if ($errors->has('objetivo'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('objetivo') }}</strong>
      </span>
    @endif
<!---------------------------DESCRIPCION---------------------------------------------------->
<div class="formulario">

    <label for="">Descripción</label>
    @if ($errors->has('image'))
    <textarea style="height: 100px;" placeholder="Reescriba la descripción seleccionada" name="descripcion" required>{{old('descripcion')}}</textarea>
    @else
    <textarea style="height: 100px;" placeholder="Reescriba la descripción seleccionada" name="descripcion" required>{{$proyecto->descripcion}}</textarea>
    @endif

  </div>

  @if ($errors->has('descripcion'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('descripcion') }}</strong>
      </span>
    @endif
<!------------------------------RESULTADOS---------------------------------->
<div class="formulario">

    <label for="">Resultados</label>
    @if ($errors->has('image'))
    <textarea style="height: 100px;" placeholder="Reescriba los resultados seleccionados" name="resultados" required>{{old('resultados')}}</textarea>
    @else
    <textarea style="height: 100px;" placeholder="Reescriba los resultados seleccionados" name="resultados" required>{{$proyecto->resultados}}</textarea>
    @endif

  </div>

  @if ($errors->has('resultados'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('resultados') }}</strong>
      </span>
    @endif
<!--------------------------BOTONES---------------------------->

	<div class="contenedor-botones">
		<a onclick="return confirm('¿Desea guardar los cambios realizados?')"><button class="btn" type="submit" ><span>Guardar</span></button></a>
    <a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/ProyectosAcademicos"><button type="button" class="btn"><span>Cancelar</span></button></a>
	
	</div>
</form>
</div>

@endsection
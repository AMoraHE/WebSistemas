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
    @csrf

<!----------------------------IMAGEN------------------------->
	<div class="contenedor-cargar-img">

      <div class="contenedor-txt-seccion">
            
        <label for="">Cargar Archivo</label>

      </div>

      <div class="contenedor-boton-cargar">

        <label for="file-upload" class="subir"><i class="fas fa-cloud-upload-alt"></i> Subir Archivo</label>  
        <input id="file-upload"  onchange='cambiar()' name="doc" type="file" accept="application/pdf" style='display: none;'/>
            
      </div>

    </div>

    <div class="cargar-doc-pdf">

      <i class="icono-pdf fas fa-file-pdf"></i>
      <div id="info-img">No se seleccionó archivo</div>
              
    </div>

    @if ($errors->has('doc'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('doc') }}</strong>
            </span>
        @endif

<!----------------------------------------------------------------- FORMULARIO convocatoria ---------------------------------------------------------->

<!-------------------------------------------------->
  

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


  <div class="contenedor-formulario-dividido">

  <!-----------------------------Fecha Inicio------------------------>

    <div class="columna-de-dos">

      <div class="formulario">

        <label>Fecha Inicio</label>
        @if ($errors->any())
        <input  type="date" id="FInicio" class="form-control" name="FInicio" value="{{old('FInicio')}}" required/>
        @else
        <input  type="date" id="FInicio" class="form-control" name="FInicio" value="{{$convocatorias->FInicio}}" required/>
        @endif

        @if ($errors->has('FInicio'))

              <span class="invalid-feedback" role="alert">

                <strong>{{ $errors->first('FInicio') }}</strong>

              </span>

          @endif

      </div>

    </div>

      <!-----------------------------Fecha Final------------------------>

    <div class="columna-de-dos">

      <div class="formulario">

        <label>Fecha Final</label>
        @if ($errors->any())
        <input  type="date" id="FFin" class="form-control" name="FFin" value="{{old('FFin')}}" required/>
        @else
        <input  type="date" id="FFin" class="form-control" name="FFin" value="{{$convocatorias->FFin}}" required/>
        @endif

        @if ($errors->has('FFin'))

              <span class="invalid-feedback" role="alert">

                <strong>{{ $errors->first('FFin') }}</strong>

              </span>

          @endif

      </div>

    </div>

  </div>


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
		<a onclick="return confirm('¿Desea guardar los cambios realizados?')"><button class="btn guardar" type="submit" ><span>Guardar</span></button></a>
    <a onclick="return confirm('¿Desea Cancelar el Proceso?')" href="/ConvocatoriasAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

	</div>
</form>
</div>

@endsection

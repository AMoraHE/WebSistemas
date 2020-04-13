@extends('layouts.administrador')

@section('title', 'Editar convocatoria')

@section('content')

<!----------------------------------------------------------------- EDITAR convocatorias ---------------------------------------------------------->


<div class="seccion-principal">
	<div class="contenedor-titulo-seccion">
		<h3>Editar - Convocatorias</h3>
	</div>

<!---------------------------convocatorias------------------------>
 <form id="formulario" class="form-goup" files="true" method="POST" action="/ConvocatoriasAcademicos/{{$convocatorias->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

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
        <input  class="fecha" data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{old('FInicio')}}" required/>
        @else
        <input  class="fecha" data-date-format="l j, F, Y" id="FInicio" name="FInicio" value="{{$convocatorias->FInicio}}" required/>
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
        <input  class="fecha" data-date-format="l j, F, Y" id="FFin" name="FFin" value="{{old('FFin')}}" required/>
        @else
        <input  class="fecha" data-date-format="l j, F, Y" id="FFin" name="FFin" value="{{$convocatorias->FFin}}" required/>
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

  <!----------------------------IMAGEN------------------------->
  <div class="contenedor-cargar-img">

      <div class="contenedor-txt-seccion">
            
        <label for="">Cargar Archivo</label>

      </div>

      <div class="contenedor-boton-cargar">

        <label for="file-upload" class="subir"><i class="fas fa-cloud-upload-alt"></i> Subir Archivo</label>  
        <input id="file-upload"  onchange='cambiar()' name="doc" type="file" accept="application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/msword, application/vnd.openxmlformats-officedocument.presentationml.presentation, application/vnd.ms-powerpoint" style='display: none;'/>
            
      </div>

    </div>

    <div class="cargar-doc-pdf">

      <i class="icono-pdf fas fa-file-pdf"></i>
      <div id="info-img">No se seleccionó archivo</div>
              
    </div>

    @if ($errors->has('doc'))
      <span class="invalid-feedback" role="alert">

        <strong>El archivo seleccionado no es válido, seleccione un archivo PDF, WORD, EXCEL, POWERPOINT</strong>

      </span>

    @endif

<!----------------------------------------------------------------- BOTONES convocatorias ---------------------------------------------------------->

  

	<div class="contenedor-botones">
		<a id="save" texto="guardar cambios?"><button class="btn guardar" type="submit" ><span>Guardar</span></button></a>
    <a class="msj" mesanje="cancelar?" href="/ConvocatoriasAcademicos"><button type="button" class="btn cancelar"><span>Cancelar</span></button></a>

	</div>
</form>
</div>

<!----------------------------------------------------------------- SCRIPT DE FECHA ---------------------------------------------------------->

    <script>
  
      $('.fecha').flatpickr({

        locale: {
              firstDayOfWeek: 1,
              weekdays: {
                shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],         
              }, 
              months: {
                shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct', 'Nov', 'Dic'],
                longhand: ['Enero', 'Febreo', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
              },
          },

      });

    </script>

@endsection

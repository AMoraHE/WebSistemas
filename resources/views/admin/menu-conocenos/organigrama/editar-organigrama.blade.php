@extends('layouts.administrador')

@section('title', 'Editar Elemento Organigrama')

@section('content')

<!--------------------------------------------------------------- EDITAR ELEMENTOS ORGANIGRAMA ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Actualizar Datos</h3>

    </div>

    <form method="POST" action="/Organigrama/{{$Organigrama->slug}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="formulario"> 
              <label for="">Área</label>
              <input type="text" name="" id ="area" value="{{$areas->nombre}}" disabled="" class="form-control">
        </div>

        <div class="formulario"> 
              <label for="">Puesto</label>
              <input type="text" name="" id ="puesto" value="{{$Organigrama->puesto}}" disabled="" class="form-control">
        </div>

        <div class="formulario"> 
              <label for="">Nombre</label>
              <input type="text" name="integrante" id ="informacion-integrante" value="{{$Organigrama->integrante}}" placeholder="Nombre del Integrante" class="form-control">
        </div>

        <div class="formulario"> 
          <div><label for="">Género del Integrante</label></div>
              <select name="genero" id ="genero" class="genero">     <!------------- Select de Género utilizando option ------------------>
                              @if($Organigrama->genero === 'H')
                              <option value="H">Hombre</option>
                              <option value="M">Mujer</option>
                              @else
                              <option value="M">Mujer</option>
                              <option value="H">Hombre</option>
                              @endif
                            </select>
        </div>

        <div class="contenedor-botones">
                    
              <a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
              <a onclick="return confirm('¿Desea bandonar sin guardar?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>

      </div>

    </form>

  </div>


@endsection
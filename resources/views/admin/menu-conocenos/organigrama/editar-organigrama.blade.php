@extends('layouts.administrador')

@section('title', 'Editar Elemento Organigrama')

@section('content')

<!--------------------------------------------------------------- EDITAR ELEMENTOS ORGANIGRAMA ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Actualizar Datos</h3>

    </div>

    <div class="formulario"> 
          <label for="">Área</label>
          <input type="text" name="" id ="area" value="id_area" disabled="" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Puesto</label>
          <input type="text" name="" id ="puesto" value="id_puesto" disabled="" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Nombre</label>
          <input type="text" name="" id ="informacion-integrante" value="" placeholder="Nombre del Integrante" class="form-control">
    </div>

    <div class="formulario"> 
      <div><label for="">Género del Integrante</label></div>
          <select name="genero_id" id ="genero" class="genero">     <!------------- Select de Género utilizando option ------------------>
                          <option value="">--Elija el genéro--</option>
                          <option>Hombre</option>
                          <option>Mujer</option>
                        </select>
    </div>

    <div class="contenedor-botones">
                
        <button class="btn"><span>Guardar</span></button>
        <button class="btn"><span>Cancelar</span></button>

    </div>

  </div>


@endsection
@extends('layouts.administrador')

@section('title', 'Agregar Elementos Organigrama')

@section('content')

<!--------------------------------------------------------------- AGREGAR ELEMENTOS ORGANIGRAMA ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Agregar Datos</h3>

    </div>

    <div class="formulario"> 
      <div><label for="">Área</label></div>
          <select name="area_id" id ="area" class="genero">     <!------------- Select de Área utilizando option ------------------>
                          <option value="">--Elija el Área--</option>
                          <option>Dirección General</option>
                          <option>Dirección Académica y de vinculación</option>
                          <option>Subdirección Académica</option>
                          <option>División de ISC</option>
                          <option>Laboratorios</option>
                          <option>Docentes</option>
                          <i></i>
                        </select>
    </div>

    <div class="formulario"> 
          <label for="">Puesto</label>
          <input type="text" name="" id ="puesto" value="" placeholder="Puesto del Integrante" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Nombre</label>
          <input type="text" name="" id ="informacion-integrante" value="" placeholder="Nombre del Integrante" class="form-control">
    </div>

    <div class="formulario"> 
      <div><label for="">Género del Integrante</label></div>
          <select name="genero_id" id ="genero" class="genero"> <!------------- Select de Género utilizando option ------------------>
                          <option value="">--Elija el genéro--</option>
                          <option>Hombre <i class="fas fa-male"></i></option>
                          <option>Mujer <i class="fas fa-female"></i></option>
                        </select>
    </div>

    <div class="contenedor-botones">
                
        <button class="btn"><span>Guardar</span></button>
        <button class="btn"><span>Cancelar</span></button>

    </div>

  </div>

@endsection
@extends('layouts.administrador')

@section('title', 'Organigrama')

@section('content')

	
  <!----------------------------------------------------------------- SELECT ---------------------------------------------------------->

  <div class="seccion-principal">

    <div class="contenedor-titulo-seccion-select">

        <h3>Editar Organigrama</h3>

        <div class="contenedor-select-seccion">
            
          <select name="area_id" id ="area" class="seleccion"> <!------------- Select de Área utilizando option ------------------>
                  <option value="">--Elija el area--</option>

                  @foreach ($areas as $area)

                  <option>{{$area->nombre}}</option>

                  @endforeach
                </select>
                <i></i>
  
      </div>

      

    </div>

  <!----------------------------------------------------------------- FORMULARIO - CARGAR IMG ---------------------------------------------------------->
<div class="formulario">
      
      <button class="btn" ><span>Agregar</span></button>
      
    </div>

    <div class="contenedor-cuerpo-noticia">

        <div class="contenedor-texto-conocenos">
          <div class="tabla-informacion-escolar">

            <table>
              
              <thead>
                <tr>
                  <th>Área</th>
                  <th>Puesto</th>
                  <th>Integrantes</th>
                  <th>Género</th>
                  <th>Eliminar</th>
                  <th>Editar</th>
                </tr>
              </thead>


              @foreach ($organigramas as $organigrama)

              <tr>
                <td>{{$organigrama->nombre}}</td>
                <td>{{$organigrama->puesto}}</td>
                <td>{{$organigrama->integrante}}</td>
                <td>
                  @if($organigrama->genero === 'H')

                  Hombre

                  @else

                  Mujer

                  @endif
                </td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              @endforeach

            </table>    

          </div>

        </div>

    </div>

<div class="contenedor-botones">

    <button class="btn"><span>Guardar</span></button>
    <button class="btn"><span>Cancelar</span></button>


    </div>
    
  </div>



@endsection
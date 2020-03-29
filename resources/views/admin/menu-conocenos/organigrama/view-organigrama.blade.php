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
                  <option>Dirección General</option>
                  <option>Dirección Académica y de vinculación</option>
                  <option>Subdirección Académica</option>
                  <option>División de ISC</option>
                  <option>Laboratorios</option>
                  <option>Docentes</option>
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

              <tr>
                <td>Dirección General</td>
                <td>Director General</td>
                <td>Diego Briseño</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Dirección Académica y de vinculación</td>
                <td>Director del area Académica y de vinculación</td>
                <td>M.C Cesar I. Flota Perez</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Subdirección Académica</td>
                <td>Subdirector del area Académica y de vinculación</td>
                <td>MC. Anabel Pinzon de la O</td>
                <td>Mujer</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>División de ISC</td>
                <td>Área de División</td>
                <td>Luis Salinas</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Laboratorios</td>
                <td>Área de Laboratorio de Sistemas Computacionales</td>
                <td>ING. Eduardo Mejía Flota</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Laboratorios</td>
                <td>Área de Laboratorio de Cisco System</td>
                <td>MTE. Noemí G. Castillo Sosa</td>
                <td>Mujer</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Laboratorios</td>
                <td>Área de Laboratorio de Microprocesadores</td>
                <td>Sin Encargado</td>
                <td></td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Presidenta</td>
                <td>MC. Arizbé del Socorro Arana Kantún</td>
                <td>Mujer</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>DR. Niels Henryk Aranda Cuevas</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>ING. Cintia Isabel Arceo Fuentes</td>
                <td>Mujer</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>MTE. Noemí G. Castillo Sosa</td>
                <td>Mujer</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>ING. Carolina Montalvo Espinosa</td>
                <td>Mujer</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>MTI. Gabriel Eduardo Balam Pool</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>MTI. Marcos Gaspar Pech Cruz</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>ING. Eduardo Castillo Moo</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>ING. Paloma Góngora Sabido</td>
                <td>Mujer</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

              <tr>
                <td>Docentes</td>
                <td>Docente</td>
                <td>ING. Plácido Balam Can</td>
                <td>Hombre</td>
                <td><button class="btn-tabla"><i class="far fa-trash-alt"></i></button></td>
                <td><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></td> 
              </tr>

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
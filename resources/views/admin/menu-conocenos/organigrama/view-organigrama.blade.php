@extends('layouts.administrador')

@section('title', 'Organigrama')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif

	
  <!----------------------------------------------------------------- SELECT ---------------------------------------------------------->

  <div class="seccion-principal">

    <div class="contenedor-titulo-seccion-select">

        <h3>Editar Organigrama</h3>

        <div class="contenedor-select-seccion">
            
          <select name="area_id" id ="area" class="seleccion" onchange="top.location.href = this.options[this.selectedIndex].value">
            <!------------- Select de Área utilizando option ------------------>
                  <option value="">--Elija el area--</option> 
                  <option value="/Organigrama">TODOS</option> 

                  @foreach ($areas as $area)

                  @php
                  $var = $area->nombre
                  @endphp

                  <option value="{{route('filtrar', ['nombre' => $var])}}">{{$area->nombre}}</option>

                  @endforeach
                </select>
                <i></i>
  
      </div>

      

    </div>

  <!----------------------------------------------------------------- FORMULARIO - CARGAR IMG ---------------------------------------------------------->
<div class="formulario">
      
      <a href="{{route('OrganigramaCrear')}}"><button class="btn" ><span>Agregar</span></button></a>
      
    </div>

    <div class="contenedor-cuerpo-noticia">

        <div class="contenedor-texto-conocenos">
          <div class="tabla-informacion-escolar">

            <table>
              
              <thead>
                <tr>
                  <th>Foto</th>
                  <th>Área</th>
                  <th>Puesto</th>
                  <th>Integrantes</th>
                  <th>Género</th>
                  <th>Email</th>
                  <th>Eliminar</th>
                  <th>Editar</th>
                </tr>
              </thead>


              @foreach ($organigramas as $organigrama)

              <tr>
                <td></td>
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
                <td></td>
                <form action="/Organigrama/{{$organigrama->slug}}" method="POST">
								@csrf
								@method('DELETE')
								<td>
								<a onclick="return confirm('¿Seguro que desea eliminar este elemento?')"><button class="btn-tabla" type="submit"><i class="far fa-trash-alt"></i></button></a>
								</td>
								</form>

                <td><a href="/Organigrama/{{$organigrama->slug}}/edit"><button class="btn-tabla"><i class="fas fa-pencil-alt"></i></button></a></td>
              </tr>

              @endforeach

            </table>    

          </div>

        </div>

    </div>

    
  </div>



@endsection
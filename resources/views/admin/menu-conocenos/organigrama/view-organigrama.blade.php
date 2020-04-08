@extends('layouts.administrador')

@section('title', 'Organigrama')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

	
<!------------------------------------------------------------------ ORGANIGRAMA -------------------------------------------------------------->

<div class="seccion-principal">

  <div class="contenedor-titulo-seccion-select">

    <h3>Organigrama</h3>

    <div class="contenedor-select-seccion">
            
      <select name="area_id" id ="area" class="seleccion" onchange="top.location.href = this.options[this.selectedIndex].value">

          <!------------- Select de Área utilizando option ------------------>
          <option value="">--Elija el Área--</option> 
          <option value="/Organigrama">Mostrar Todos</option> 

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

  <div class="contenedor-botones">
      
      <a onclick="return confirm('¿Desea agregar un nuevo elemento?')" href="{{route('OrganigramaCrear')}}"><button class="btn agregar"><span>Agregar</span></button></a>
      
  </div>

<!------------------------------------------------------------------ TABLA - ORGANIGRAMA ------------------------------------------------------------->

  <div class="contenedor-cuerpo-seccion">

    <div class="contenedor-texto-completo">
    
      <div class="tabla-informacion-escolar">

        <table>
              
          <thead>
            <tr>
              <th>Foto</th>
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
            <td><img src="/images/organigrama/{{$organigrama->foto}}"></td>
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
                
          <form action="/Organigrama/{{$organigrama->slug}}" method="POST">
						@csrf
						@method('DELETE')
						
            <td>
							
              <a onclick="return confirm('¿Seguro que desea eliminar este elemento?')"><button class="btn-tabla eliminar" type="submit"><i class="far fa-trash-alt"></i></button></a>
						
            </td>
					
          </form>

            <td><a href="/Organigrama/{{$organigrama->slug}}/edit" onclick="return confirm('¿Seguro que desea editar este elemento?')"><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a></td>
          
          </tr>
              
          <tr>

            <td colspan="7"><p>{{$organigrama->correo}}</p></td>
          
          </tr>

          @endforeach

        </table>    

      </div>

    </div>

  </div>

</div>



@endsection
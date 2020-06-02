@extends('layouts.administrador')

@section('title', 'Footer')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

@if(session('Error'))

  <span class="invalid-feedback" role="alert">
    <strong>{{session('Error')}}</strong>
  </span>

@endif

<!----------------------------------------------------------------- FOOTER --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1>FOOTER</h1>
    
  </div>

<!----------------------------------------------------------------- FOOTER COLUMNA 1--------------------------------------------------------------------------->

  <div class="contenedor-componentes-principales">

    @foreach($infoFooter as $infoF)
    <div class="contenedor-titulo-seccion">

      <h3>{{$infoF->titulo}}</h3>

    </div>

    <div class="contenedor-cuerpo-dividido">

      <div class="contenedor-img-dividido hover-img">

      <!---------------------------------- MODAL IMG -------------------------------------------->

        <a href="#modal-img">

          <img src="/img/{{$infoF->img}}">
          <span><i class="fas fa-expand"></i></span>
        
        </a>

      </div>

        <div class="modal-img" id="modal-img">

          <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
          <img src="/img/{{$infoF->img}}" />

                
        </div>

      <!---------------------------------- FIN MODAL IMG -------------------------------------------->

      <div class="contenedor-texto-dividido">

        <p>{{$infoF->descripcion}}</p>

      </div>

    </div>
    @endforeach

  </div>

<!-------------------------------------------------------------- BOTON EDITA INFORMACIÓN----------------------------------------------------------------------------->

  <div class="contenedor-botones">
    
    <a class="msj" mesanje="editar la información?" href="/admin-footer-infoFooter/{{$infoF->slug}}/edit"><button class="btn editar"><span>Editar Descripción</span></button></a>

  </div>

<!----------------------------------------------------------------- FOOTER COLUMNA 2--------------------------------------------------------------------------->

  <div class="contenedor-titulo-seccion">

    <h3>Redes Sociales</h3> 

  </div>

    <div class="tabla-informacion-escolar">

        <table>
                  
          <thead>
            <tr>
              <th>Logo</th>
              <th>Descripción</th>
              <th>Enlace</th>
              <th>Eliminar</th>
              <th>Editar</th>
            </tr>
          </thead>

            @foreach($redes as $red)
            <tr>

              <td><img src="/icon/{{$red->icon}}"></td>
              <td>{{$red->descripcion}}</td>
              <td>{{$red->enlace}}</td>
              
              <td>
                <a class="msj" mesanje="eliminar este elemento?" href="/admin-footer-eliminarRed/{{$red->slug}}"><button class="btn-tabla eliminar"><i class="far fa-trash-alt"></i></button></a>
              </td>

              <td>
                <a class="msj" mesanje="editar este elemento?" href="/admin-footer-redes/{{$red->slug}}/edit"><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a>
              </td> 

            </tr>
            @endforeach

        </table>    

    </div>

  
  <div class="contenedor-botones">

      @if(count($redes) > 4)
      <button></button>
      @else
      <a class="msj" mesanje="agregar una nueva red social?" href="/admin-footer-redes/agregar"><button class="btn agregar"><span>Agregar Red Social</span></button></a>
      @endif

  </div>

<!----------------------------------------------------------------- FOOTER COLUMNA 3--------------------------------------------------------------------------->
  <div class="contenedor-titulo-seccion">

    <h3>Contactos Generales</h3> 

  </div>

  <div class="tabla-informacion-escolar">

        <table>
                  
          <thead>
            <tr>
              <th>Titulos</th>
              <th>Información</th>
              <th>Editar</th>
            </tr>
          </thead>

            @foreach($contactosGen as $contactoGen)
            <tr>

              <td>{{$contactoGen->titulo}}</td>
              <td>{{$contactoGen->descripcion}}</td>
              <td>
                <a class="msj" mesanje="editar este elemento?" href="/admin-footer-contactoGen/{{$contactoGen->slug}}/edit"><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a>
              </td> 

            </tr>
            @endforeach

        </table>    

    </div>


</div>

@endsection
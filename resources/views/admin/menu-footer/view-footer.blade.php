@extends('layouts.administrador')

@section('title', 'Footer')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

 <div class="contenedor-botones">
    
    <a href="/admin-footer-edit"><button class="btn editar"><span>VISTA EDITAR</span></button></a>

  </div>

<!----------------------------------------------------------------- FOOTER --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1>FOOTER</h1>
    
  </div>

<!----------------------------------------------------------------- FOOTER COLUMNA 1--------------------------------------------------------------------------->

  <div class="contenedor-componentes-principales">

    <div class="contenedor-titulo-seccion">

      <h3>Información de la escuela</h3>

    </div>

    <div class="contenedor-cuerpo-dividido">

      <div class="contenedor-img-dividido hover-img">

      <!---------------------------------- MODAL IMG -------------------------------------------->

        <a href="#modal-img">

          <img src="">
          <span><i class="fas fa-expand"></i></span>
        
        </a>

      </div>

        <div class="modal-img" id="modal-img">

          <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
          <img src="" />

                
        </div>

      <!---------------------------------- FIN MODAL IMG -------------------------------------------->

      <div class="contenedor-texto-dividido">

        <p>Somos una institución que franquea alumnos :v capturamos EmOssielNorlax y ayudamos a nuestros alumnos a desarrollar su capacidad y los volvemos maestros puchamones...</p>

      </div>

    </div>

  </div>

<!-------------------------------------------------------------- BOTON EDITA INFORMACIÓN----------------------------------------------------------------------------->

  <div class="contenedor-botones">
    
    <a class="msj" mesanje="editar la información?" href="/admin-footer-edit"><button class="btn editar"><span>Editar</span></button></a>

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

            <tr>
              <td><img src="/icon/facebook.png"></td>
              <td>Siguenos x Facebook</td>
              <td>http//:www.facebook.com</td>
              
              <td>
                <a class="msj" mesanje="eliminar este elemento?" href=""><button class="btn-tabla eliminar"><i class="far fa-trash-alt"></i></button></a>
              </td>

              <td>
                <a class="msj" mesanje="editar este elemento?" href=""><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a>
              </td> 

            </tr>

        </table>    

    </div>

  <div class="contenedor-botones">
      
      <a class="msj" mesanje="agregar una nueva red social?" href=""><button class="btn agregar"><span>Agregar</span></button></a>
      
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

            <tr>
              <td>Dirección</td>
              <td>Carretera Vigía Chico Km 1.5, C.P. 77200, Felipe Carrillo Puerto, Quintana Roo, México</td>

              <td>
                <a class="msj" mesanje="editar este elemento?" href=""><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a>
              </td> 

            </tr>

            <tr>
              <td>Teléfono</td>
              <td>834-00-51, 267-10-48</td>

              <td>
                <a class="msj" mesanje="editar este elemento?" href=""><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a>
              </td> 

            </tr>

            <tr>
              <td>Correo electrónico</td>
              <td>direccion@gmail</td>

              <td>
                <a class="msj" mesanje="editar este elemento?" href=""><button class="btn-tabla editar"><i class="fas fa-pencil-alt"></i></button></a>
              </td> 

            </tr>

        </table>    

    </div>


</div>

@endsection
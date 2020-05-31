@extends('layouts.administrador')

@section('title', 'Información Carrera')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

<div class="seccion-principal">

	<div class="titulos-secciones-principales">

    	<h1>FOOTER</h1>
    
  	</div>

	
	<div class="contenedor-titulo-seccion">

		<h3>FOOTER X2</h3>

	</div>

  <div class="contenedor-botones">
    
    <a href="/admin-footer-edit"><button class="btn editar"><span>VISTA EDITAR</span></button></a>

  </div>

<!----------------------------------------------------------------- CUERPO INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

	<div class="contenedor-componentes-principales">

	<div class="tabla-informacion-carrera">

		<table>

			<thead>
            <tr>
              <th>Foto</th>
              <th>Información</th>
            </tr>
          </thead>

          <tr>
          	<td>
              <div class="contenedor-img-organigrama hover-img">

                  <a href="#modal-img1">
    
                    <img src="">
                    <span><i class="fas fa-expand"></i></span>

                  </a>

                </div>

                  <div class="modal-img" id="modal-img1">

                      <a href="#page" class="btn-close"><i class="fas fa-times"></i></a>
                      <img src="/1.png" />

                
                  </div>
                </td>
          	<td>
              <p>FOOTER X3</p>
            </td>
          </tr>

			
						
		</table>

	</div>

	</div>

<!----------------------------------------------------------------- BOTONES INFORMACIÓN DE LA CARRERA --------------------------------------------------------------------------->

	<div class="contenedor-botones">

		<a class="msj" mesanje="editar footer?" href=""><button class="btn editar"><span>Editar</span></button></a>
			
	</div>

</div>

@endsection
@extends('layouts.administrador')

@section('title', 'Lista de Sliders')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- SLIDER ---------------------------------------------------------->

<div class="seccion-principal">

  <div class="titulos-secciones-principales">

    <h1>LISTA DE ENCABEZADOS</h1>
    
  </div>
  
  <div class="contenedor-botones">

    <a href="/admin-header-edit"><button class="btn editar"><span>VISTA EDIT</span></button></a>
    <!-- <a class="msj" mesanje="agregar más slider" href="slider/create"><button class="btn agregar"><span>Agregar</span></button></a> -->

  </div>

<!----------------------------------------------------------------- IMG SLIDER ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion">
      
      <h3>NEL</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="/1.png">

  </div>

  <div class="contenedor-titulo-seccion">

    <h3>NEL X2</h3>

  </div>


<!----------------------------------------------------------------- BOTONES SLIDER ---------------------------------------------------------->


  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href=""><button class="btn editar"><span>Editar</span></button></a>
    button></a>

  </div>

</div>

@endsection

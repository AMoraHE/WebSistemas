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


<!----------------------------------------------------------------- IMG NOTICIAS ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion">
      
      <h3>Noticias</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="img/academicos.png">

  </div>


<!----------------------------------------------------------------- BOTONES ENCABEZADO ---------------------------------------------------------->


  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href=""><button class="btn editar"><span>Editar</span></button></a>

  </div>

<!----------------------------------------------------------------- IMG CONOCENOS ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion">
      
      <h3>Cónocenos</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="img/academicos.png">

  </div>


<!----------------------------------------------------------------- BOTONES ENCABEZADO ---------------------------------------------------------->


  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href=""><button class="btn editar"><span>Editar</span></button></a>

  </div>

<!----------------------------------------------------------------- IMG CONOCENOS SUBSECCIONES---------------------------------------------------------->

<div class="encabezado-subsecciones">

  <div class="contenedor-sub">

     <img src="img/academicos.png">

     <div class="contenedor-fecha-noticia">

          <p>Información de la Carrera</p>
          
      </div>  

    
  </div>

  <div class="contenedor-sub">

     <img src="img/academicos.png">
     <div class="contenedor-fecha-noticia">

          <p>Perfil de la Carrera</p>
          
      </div>  
    
  </div>

  <div class="contenedor-sub">

     <img src="img/academicos.png">
     <div class="contenedor-fecha-noticia">

          <p>LI - CA</p>
          
      </div>      
    
  </div>

  <div class="contenedor-sub">

     <img src="img/academicos.png">
     <div class="contenedor-fecha-noticia">

          <p>Retícula</p>
          
      </div>      
    
  </div>

  <div class="contenedor-sub">

     <img src="img/academicos.png">
     <div class="contenedor-fecha-noticia">

          <p>Organigrama</p>
          
      </div>      
    
  </div>
  
</div>

<!----------------------------------------------------------------- IMG INFRAESTRUCTURA ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion">
      
      <h3>Infraestructura</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="img/academicos.png">

  </div>


<!----------------------------------------------------------------- BOTONES ENCABEZADO ---------------------------------------------------------->


  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href=""><button class="btn editar"><span>Editar</span></button></a>

  </div>

<!----------------------------------------------------------------- IMG ACÁDEMICOS ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion">
      
      <h3>Académicos</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="img/academicos.png">

  </div>


<!----------------------------------------------------------------- BOTONES ENCABEZADO ---------------------------------------------------------->


  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href=""><button class="btn editar"><span>Editar</span></button></a>

  </div>

<!----------------------------------------------------------------- IMG ACÁDEMICOS SUBSECCIONES---------------------------------------------------------->

<div class="encabezado-subsecciones">

  <div class="contenedor-sub">

     <img src="img/academicos.png">

     <div class="contenedor-fecha-noticia">

          <p>Proyectos</p>
          
      </div>  

    
  </div>

  <div class="contenedor-sub">

     <img src="img/academicos.png">
     <div class="contenedor-fecha-noticia">

          <p>Eventos Académicos</p>
          
      </div>  
    
  </div>

  <div class="contenedor-sub">

     <img src="img/academicos.png">
     <div class="contenedor-fecha-noticia">

          <p>Convocatorias</p>
          
      </div>      
    
  </div>

    <div class="contenedor-sub">

     <img src="img/academicos.png">
     <div class="contenedor-fecha-noticia">

          <p>Programas</p>
          
      </div>      
    
  </div>
  
</div>


<!----------------------------------------------------------------- IMG CONOCENOS ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion">
      
      <h3>Galería</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="img/academicos.png">

  </div>


<!----------------------------------------------------------------- BOTONES ENCABEZADO ---------------------------------------------------------->


  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href=""><button class="btn editar"><span>Editar</span></button></a>

  </div>

<!----------------------------------------------------------------- IMG CONOCENOS ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion">
      
      <h3>Contáctanos</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="img/academicos.png">

  </div>


<!----------------------------------------------------------------- BOTONES ENCABEZADO ---------------------------------------------------------->


  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href=""><button class="btn editar"><span>Editar</span></button></a>

  </div>


<!----------------------------------------------------------------- IMG CLENDARIO ---------------------------------------------------------->


  <div class="contenedor-titulo-seccion">
      
      <h3>Calendario</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="img/academicos.png">

  </div>


<!----------------------------------------------------------------- BOTONES ENCABEZADO ---------------------------------------------------------->


  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href=""><button class="btn editar"><span>Editar</span></button></a>

  </div>



</div>

@endsection

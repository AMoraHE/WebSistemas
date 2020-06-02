@extends('layouts.administrador')

@section('title', 'Lista de Encabezados')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<div class="seccion-principal">

  <div class="titulos-secciones-principales">

    <h1>LISTA DE ENCABEZADOS</h1>
    
  </div>

  @foreach($headers as $header)
  <div class="contenedor-titulo-seccion">
      
      <h3>{{$header->titulo}}</h3>

  </div>

  <div class="contenedor-img-grande">

    <img src="images/header/{{$header->img}}">

  </div>

  <div class="contenedor-botones">

    <a class="msj" mesanje="editar el encabezado?" href="/admin-header/{{$header->slug}}/edit"><button class="btn editar"><span>Editar</span></button></a>

  </div>

  @if($header->slug == "conocenos" || $header->slug == "academicos" || $header->slug == "contactanos")
  <div class="titulos-secciones-principales">

    <h1>LISTA DE SUBENCABEZADOS</h1>
    
  </div>
  @endif

  <div class="encabezado-subsecciones">

    @foreach($subheaders as $subheader)
    @if($header->slug == $subheader->sSeccion)
    <div class="contenedor-sub">

       <img src="/images/header/{{$subheader->sImg}}">

       <div class="contenedor-fecha-noticia">

            <p>{{$subheader->sTitulo}}</p>
            <a class="msj" mesanje="editar el encabezado?" href="/admin-header-sub/{{$subheader->sSlug}}/edit"><button class="btn editar"><span>Editar</span></button></a>
            
        </div>  

    </div>
    @endif
    @endforeach
  
  </div>
  @endforeach

</div>

@endsection

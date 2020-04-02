@extends('layouts.administrador')

@section('title', 'Celula de Desarrollo de Software')

@section('content')
@include('common.errors')


<div class="seccion-principal">

	<div class="contenedor-titulo-seccion">
	
			<h3>Editar - Celula de Desarrollo de Software</h3>

	 </div>


<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->

<form class="form-group" files = "true" method="POST" action="/Lab-Celula" enctype="multipart/form-data">
 

  <!----------------------------------------------------------------- Cargar Imagen ---------------------------------------------------------->
  @include('admin.menu-inf.formEdit')

@endsection
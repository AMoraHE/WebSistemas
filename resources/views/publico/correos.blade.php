@extends('layouts.publico')

@section('title', 'Correos')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif



<div class="seccion-principal">

<!------------------------------------------------------------- IMG Encabezado ----------------------------------------------------------->

      <div class="contenedor-img-encabezado">

          <div class="img-encabezado">

            <img src="/img/contacto.jpg">

            <div class="encabezado">

            	<h1>Queremos saber de ti</h1>
            	<hr>

            </div>

          </div>   

          <div class="skew-abajo"></div>

      </div>

	<!------------------------------------------------------------- INFO ----------------------------------------------------------->
		<div class="info-contacto-1">

			<div class="info-contacto-2">
				
			<p class="contacto">Nos interesa conocer tus opiniones y dudas sobre la carrera.</p>
		    <p>Escríbenos y nos pondremos en contacto contigo.</p>

		    </div>
			
		</div>

	<div class="contenedor-secciones">
			

		<div class="contenedor-titulo-seccion-mas">

		
			<h3>Contactos</h3>


		</div>

		@foreach($directors as $director)

		<div class="contenedor-contacto">

			<div class="foto-contacto">
				
				<img src="/images/organigrama/{{$director->foto}}">

			</div>

			<div class="contenedor-cuerpo-contacto">
				
			
				<div class="contenedor-txt-contacto">
					<p>{{$director->nombre}}</p>
					<p>{{$director->puesto}}</p>
					<p>{{$director->integrante}}</p>
					
					@php
						$var = $director->correo
					@endphp

					<h3>{{$director->correo}}</h3>

				</div>


				<div class="seccion-continuacion">

					<a href="/isc-inicio-formContacto/{{$var}}"><button class="btn-leer"><span>Contactar</span></button></a>
						
				</div>

			</div>

		</div>

		@endforeach

	</div>

</div>

@endsection

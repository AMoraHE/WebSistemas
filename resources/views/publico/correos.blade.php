@extends('layouts.publico')

@section('title', 'Correos')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif



<div class="seccion-principal">

	<!------------------------------------------------------------- IMG PARALLAX ----------------------------------------------------------->

	<div class="contenedor-img-parallax">

	    <div class="img-parallax"> <!--style="background:url(../img/contacto.jpg);"-->
	     <div class="proyectos">
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

		<div class="contenedor-contacto">

			<div class="foto-contacto">
				
				<img src="{{ asset('img/Mora.jpeg')}}">

			</div>

			<div class="contenedor-cuerpo-contacto">
				
			
				<div class="contenedor-txt-contacto">
					<p>División ISC</p>
					<p>Jefa de la academia</p>
					<p>MC. MAHALETH SALINAS SEGURA</p>
					
					@php
						$var = 'm.salinas@itscarrillopuerto.edu.mx'
					@endphp

					<h3>m.salinas@itscarrillopuerto.edu.mx</h3>

				</div>

				<div class="contenedor-botones">
					
					<a href="/isc-inicio-formContacto/{{$var}}"><button class="btn"><span>Contactar</span></button></a>

				</div>

			</div>

		</div>

	</div>

</div>

@endsection

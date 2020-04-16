@extends('layouts.publico')

@section('title', 'Proyectos')

@section('content')

@if(session('status'))

    <div class="alert alert-success">
        {{session('status')}}
    </div>

@endif

<!----------------------------------------------------------------- PROYECTOS ---------------------------------------------------------->


<div class="seccion-principal">

	<!-----------------Botones--------->


	@foreach ($proyectos as $proyecto)

	<div class="contenedor-titulo-seccion">

		<h3>{{$proyecto->proyecto}}</h3>

	</div>

	<div class="contenedor-img-grande">

		<img src="/images/proyectos/{{$proyecto->newimage}}">

	</div>

	<!----------------------------------------------------------------- DIVISOR ---------------------------------------------------------->

	<div class="divisor-contenido"></div>

	<!----------------------------------------------------------------- TABLA ---------------------------------------------------------->


			<div class="tabla-informacion-escolar">

				<table>

					<thead>
						<tr>
							<th>Desarrolladores</th>
							<th>Descripción</th><!--Comentar-->
						</tr>
					</thead>

						<tr>
							<td>

							<ol>
								@foreach (explode(', ', $proyecto->desarrolladores) as $desarrolladores)
								<li>{{$desarrolladores}}</li>
								@endforeach
							</ul>

							</td>

							<td>{{$proyecto->descripcion}}</td><!--Comentar-->
							<!----<td>{{$proyecto->resultados}}</td>---->
						</tr>

<!--					<thead>
						<tr>
							<th colspan="4">Descripción</th>
						</tr>
					</thead>

						<tr>
							<td colspan="4">{{$proyecto->descripcion}}</td>
						</tr>	-->

				</table>

			</div>


<!----------------------------------------------------------------- GALERÍA ---------------------------------------------------------->
	<div class="formulario">

		<label>Mini Galería: </label>

	</div>

	<div class="seccion-mini-galeria">

		@foreach ($imagenes as $imagen)
		@if($imagen->proySlug == $proyecto ->slug)

		<div class="contenedor-img-mini-galeria">

			<div class="contenedor-img-mini-galeria-img">

				<img src="/images/proyectos/{{$imagen->imagen}}">

			</div>

			
		</div>

		@endif
		@endforeach

	</div>

<!---------------BOTONES PROYECTOS------------------------------------->



	@endforeach

	<div id="paginas">
			{{$proyectos->links()}}
	</div>

</div>

@endsection

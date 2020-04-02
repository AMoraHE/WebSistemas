@extends('layouts.administrador')

@section('title', 'Campo Laboral')

@section('content')

		<div class="seccion-principal">

<!----------------------------------------------------------------- Lab Celula---------------------------------------------------------->
	
	<h1>Celula de Desarrollo de Software</h1>

	<div>

		<img src="https://i.blogs.es/902d35/ios/1366_2000.jpg" width="950px" height="300px">


		<h3>Descripcion: </h3>
		<p>Aqui va una descripcion bien mamalona</p>
		<h3>Responsable: </h3>
		<p>Aqui va un nombre bien mamalon de alguien</p>
		<h3>Correo: </h3>
		<p>Aqui va un correro bien mamalon de alguien</p>

		
		<br>
		<br>
		<hr>

		<table>
			<tr>
				<td><img src="https://cdn.discordapp.com/attachments/334533281674690560/694983754967679036/The_nigger.jpg"></td>
				<td><img src="https://cdn.discordapp.com/attachments/334533281674690560/694983754967679036/The_nigger.jpg"></td>
				<td><img src="https://cdn.discordapp.com/attachments/334533281674690560/694983754967679036/The_nigger.jpg"></td>
			</tr>

			<tr>
				<td><img src="https://cdn.discordapp.com/attachments/334533281674690560/694983754967679036/The_nigger.jpg"></td>
				<td><img src="https://cdn.discordapp.com/attachments/334533281674690560/694983754967679036/The_nigger.jpg"></td>
				<td><img src="https://cdn.discordapp.com/attachments/334533281674690560/694983754967679036/The_nigger.jpg"></td>
			</tr>
		</table>

		<a href="{{route('LabMicroE')}}"><button>Editar</button></a> <!-- Editar Todo -->


	</div>

@endsection
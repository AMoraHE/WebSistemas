@extends('layouts.administrador')

@section('title', 'Agregar Elementos Organigrama')

@section('content')

<!--------------------------------------------------------------- AGREGAR ELEMENTOS ORGANIGRAMA ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Agregar Datos</h3>

      </div>
  
  <!---------------------- AGREGAR IMG -------------------------> 

      <div class="formulario">

        <label for="">Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>
          
      </div>

    <form class="form-group" method="POST" action="/Organigrama" enctype="multipart/form-data">
      @csrf

    <div class="contenedor-cargar-img">

        <div class="contenedor-txt-seccion">
          
          <label for="">Subir Foto del Personal</label>

        </div>

        <div class="contenedor-boton-cargar">

          <label for="file-upload" class="subir">
            <i class="fas fa-cloud-upload-alt"></i> Subir Archivo
          </label>
            
          <input required id="file-upload" name="imgOrg" onchange='cambiar()' type="file" accept="image/gif, image/jpeg, image/png" style='display: none;' required />

          <div id="info-img">No se Eligió Archivo</div>
          
          
        </div>
          

        <div class="contenedor-img-seccion">
          
          <img id="img-pre" src="img/LogoNuevaImagen.png">

        </div>
          

    </div>

    <!---------------------- MENU SELECT -------------------------> 

    <div class="formulario"> 
      <div><label for="">Área</label></div>
          <select name="area_id" id ="area" class="genero" required>     <!------------- Select de Área utilizando option ------------------>
                          <option value="">--Elija el Área--</option>
                          @foreach ($areas as $area)

                          <option value="{{$area->id}}">{{$area->nombre}}</option>

                          @endforeach
                          <i></i>
                        </select>
    </div>

    <!---------------------- AGREGAR DATOS -------------------------> 

      <div class="formulario"> 
            <label for="">Puesto</label>
            <input type="text" name="puesto" id ="puesto" value="" placeholder="Puesto del Integrante" class="form-control" required>
      </div>

      <div class="formulario"> 
            <label for="">Nombre</label>
            <input type="text" name="nombre" id ="informacion-integrante" value="" placeholder="Nombre del Integrante" class="form-control" required>
      </div>

      <div class="formulario"> 
        <div><label for="">Género del Integrante</label></div>
            <select name="genero_id" id ="genero" class="genero" required> <!------------- Select de Género utilizando option ------------------>
                            <option value="">--Elija el genéro--</option>
                            <option value="H">Hombre <i class="fas fa-male"></i></option>
                            <option value="M">Mujer <i class="fas fa-female"></i></option>
                          </select>
      </div>

      <div class="formulario">

        <label for="">Correo Electrónico</label>
        <input type="email" name="correo" id="correo" placeholder="Ej: usuario@servidor.com" required>
        
      </div>

      <!---------------------- BOTONES -------------------------> 

      <div class="contenedor-botones">
                  
              <a onclick="return confirm('¿Desea guardar el nuevo elemento?')"><button type="submit" class="btn"><span>Agregar</span></button></a>
              <a onclick="return confirm('¿Desea cancelar el nuevo elemento?')" href="{{url()->previous()}}"><button type="button" class="btn"><span>Cancelar</span></button></a>

      </div>

    </form>

  </div>

@endsection
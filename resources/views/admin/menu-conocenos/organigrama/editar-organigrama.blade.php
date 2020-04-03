@extends('layouts.administrador')

@section('title', 'Editar Elemento Organigrama')

@section('content')

<!--------------------------------------------------------------- EDITAR ELEMENTOS ORGANIGRAMA ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Actualizar Datos</h3>

    </div>

      <div class="formulario">

        <label for="">Tamaño de imagen recomendado: 200px de ancho y 200px de alto</label>
          
      </div>

    <!---------------------- AGREGAR IMG -------------------------> 

    <form method="POST" action="/Organigrama/{{$Organigrama->slug}}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="contenedor-cargar-img">

            <div class="contenedor-txt-seccion">
              
              <label for="">Subir Foto del Personal</label>

            </div>

            <div class="contenedor-boton-cargar">

              <label for="file-upload" class="subir">
                <i class="fas fa-cloud-upload-alt"></i> Subir Archivo
              </label>
                
              <input id="file-upload" onchange='cambiar()' name="imgOrg" type="file" accept="image/gif, image/jpeg, image/png" style='display: none;'/>

              <div id="info-img">No se Eligió Archivo</div>
              
              
            </div>
              

            <div class="contenedor-img-seccion">
              
              <img id="img-pre" src="/images/organigrama/{{$Organigrama->foto}}">

            </div>
              

        </div>

      <!---------------------- AGREGAR DATOS ------------------------->

        <div class="formulario"> 
              <label for="">Área</label>
              <input type="text" name="" id ="area" value="{{$areas->nombre}}" disabled="" class="form-control" required>
        </div>

        <div class="formulario"> 
              <label for="">Puesto</label>
              <input type="text" name="" id ="puesto" value="{{$Organigrama->puesto}}" disabled="" class="form-control" required>
        </div>

        <div class="formulario"> 
              <label for="">Nombre</label>
              <input type="text" name="integrante" id ="informacion-integrante" value="{{$Organigrama->integrante}}" placeholder="Nombre del Integrante" class="form-control" required required>
        </div>

        <div class="formulario"> 
          <div><label for="">Género del Integrante</label></div>
              <select name="genero_id" id ="genero" class="genero" required>     <!------------- Select de Género utilizando option ------------------>
                              @if($Organigrama->genero === 'H')
                              <option value="H">Hombre</option>
                              <option value="M">Mujer</option>
                              @else
                              <option value="M">Mujer</option>
                              <option value="H">Hombre</option>
                              @endif
                            </select>
        </div>

        <div class="formulario">

          <label for="">Correo Electrónico</label>
          <input type="email" name="correo" id="correo" value="{{$Organigrama->correo}}" placeholder="Ej: usuario@servidor.com" required>
        
        </div>

        <!---------------------- BOTONES -------------------------> 

        <div class="contenedor-botones">
                    
              <a onclick="return confirm('¿Seguro que desea actualizar?')"><button type="submit" class="btn"><span>Guardar</span></button></a>
              <a onclick="return confirm('¿Desea abandonar sin guardar?')" href="/Organigrama"><button type="button" class="btn"><span>Cancelar</span></button></a>

      </div>

    </form>

  </div>


@endsection
@extends('layouts.administrador')

@section('title', 'Confirmación')


@section('content-alerta')
<!-- MODAL -->

  <div id="ModalAlertas" class="modal">
      <div class="flex" id="flex">
        <div class="contenido-modal">

          <form class="form-horizontal" method="POST" action="addEvent.php">

          <div class="modal-encabezado">

            <h5>Confimación</h5>
            <span class="close" data-dismiss="modal">&times;</span>

          </div>

          <div class="modal-cuerpo">

          <p>Desea Continuar ... ?</p>

          </div>

          <div class="modal-pie">

            <div class="contenedor-botones-modal">
                      
              <button type="button" class="btn-modal finalizar" data-dismiss="modal"><span>Aceptar</span></button>  
              <button type="button" class="btn-modal cancelar" data-dismiss="modal"><span>Cancelar</span></button>

            </div>

          </div>

          </form>

        </div>

      </div>

  </div>

@endsection

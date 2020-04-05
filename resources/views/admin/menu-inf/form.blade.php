<div>	
		@csrf
        <h3>Imagen Principal</h3>
        <br>
        <label>Imagen</label>	 	
        <input type="file" name="imgInicio">
        <img src="/img/LogoNuevaImagen.png">
  
      <br>
        @if ($errors->has('imgInicio'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('imgInicio') }}</strong>
            </span>
        @endif
      <br>
      <hr>
      <br>
      
  
    	
        <h3>Datos Generales</h3>
        <br>
        <label>Descripcion</label>
        <textarea name="descripcion" placeholder="Descripcion">{{old('descripcion')}}</textarea>
        <br>
        @if ($errors->has('descripcion'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('descripcion') }}</strong>
            </span>
        @endif
        <br>
        <label>responsable</label>
        <input type="text" name="responsable" value="{{old('responsable')}}">
        <br>
        @if ($errors->has('responsable'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('responsable') }}</strong>
            </span>
        @endif
        <br>
        <label>Correo</label>
        <input type="email" name="correo" value="{{old('correo')}}">
        <br>
        @if ($errors->has('correo'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('correo') }}</strong>
            </span>
        @endif
        <br>
        <label>Slug</label>
        <input type="text" name="slug" value="{{old('slug')}}">
      <br>
        @if ($errors->has('slug'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('slug') }}</strong>
            </span>
        @endif
      <br>
      <hr>
      <br>
      <br>
  
    	
        <h3>Fotos</h3>
        <br>
        <table>
          <tr>
            <td>
              <label>Imagen 1</label>
              <input type="file" name="img1">
            </td>
            <td><img src="/img/LogoNuevaImagen.png"></td>
            <td>
              @if ($errors->has('img1'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('img1') }}</strong>
                </span>
              @endif
            </td>
          </tr>
          <tr>
            <td>
              <label>Imagen 2</label>
              <input type="file" name="img2">
            </td>
            <td><img src="/img/LogoNuevaImagen.png"></td>
            <td>
              @if ($errors->has('img2'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('img2') }}</strong>
                </span>
              @endif
            </td>
          </tr>
          <tr>
            <td>
              <label>Imagen 3</label>
              <input type="file" name="img3">
            </td>
            <td><img src="/img/LogoNuevaImagen.png"></td>
            <td>
              @if ($errors->has('img3'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('img3') }}</strong>
                </span>
              @endif
            </td>
          </tr>
          <tr>
            <td>
              <label>Imagen 4</label>
              <input type="file" name="img4">
            </td>
            <td><img src="/img/LogoNuevaImagen.png"></td>
            <td>
              @if ($errors->has('img4'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('img4') }}</strong>
                </span>
              @endif
            </td>
          </tr>
          <tr>
            <td>
              <label>Imagen 5</label>
              <input type="file" name="img5">
            </td>
            <td><img src="/img/LogoNuevaImagen.png"></td>
            <td>
              @if ($errors->has('img5'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('img5') }}</strong>
                </span>
              @endif
            </td>
          </tr>
          <tr>
            <td>
              <label>Imagen 6</label>
              <input type="file" name="img6">
            </td>
            <td><img src="/img/LogoNuevaImagen.png"></td>
            <td>
              @if ($errors->has('img6'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('img6') }}</strong>
                </span>
              @endif
            </td>
          </tr>
        </table>
</div>

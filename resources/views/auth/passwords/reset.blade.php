@extends('layouts.app')

@section('content')
<div id="seccion-login">
                <div class="titulo-seccion-loggin">{{ __('Restablecer contraseña') }}</div>

                <div class="cuerpo-seccion-loggin">
                    <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="formulario">
                            <label for="email">{{ __('Dirección de correo electrónico') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="formulario">
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="formulario">
                            <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="contenedor-botones">
                                <button type="submit" class="btn">
                                    <span>{{ __('Restablecer') }}</span>
                                </button>
                        </div>
                    </form>
                </div>
</div>
@endsection

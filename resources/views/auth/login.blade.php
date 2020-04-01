@extends('layouts.app')

@section('content')
<div id="seccion-login">

                <div class="titulo-seccion-loggin">{{ __('Login') }}</div>

                <div class="cuerpo-seccion-loggin">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="formulario">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="formulario">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="formulario-check">

                                    <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label  for="remember">
                                        <span></span> {{ __('Remember Me') }}
                                    </label>
                        </div>

                        <div class="contenedor-boton-CE">
                                
                                <button type="submit" class="btn">
                                    <span>{{ __('Login') }}</span>
                                </button>

                        </div>
                    </form>

                </div>

                <div class="contenedor-seccion-botones-inicio-sesion">


                        <a href="{{ route('password.request') }}">
                            <button class="btn centrado"><span>{{ __('Forgot Your Password?') }}</span></button>
                        </a>


                </div>

</div>
@endsection

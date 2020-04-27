<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'imgPerfil' => 'mimes:jpeg,png,bmp,tiff,gif|max:512',
            'validar' => 'required|string|in:AW-txVvwuVDeN%3|min:15|max:15',
        ], [
            'name.required' => 'Se requiere que ingrese un nombre de usuario',
            'name.string' => 'El nombre de usuario ingresado contiene caracteres no válidos',
            'name.max' => 'El nombre de usuario ingresado es demasiado largo',
            'email.required' => 'Se requiere que ingrese un correo electrónico',
            'email.string' => 'El correo electrónico ingresado contiene caracteres no válidos',
            'email.email' => 'No ha ingresado una dirección de correo electrónico',
            'email.max' => 'La dirección de correo electrónico ingresada es demasiado larga',
            'email.unique' => 'La dirección de correo electrónico ya ha sido registrada',
            'password.required' => 'Se requiere que ingrese una contraseña',
            'password.string' => 'La contraseña ingresada contiene caracteres no válidos',
            'password.min' => 'La contraseña ingresada es demasiado corta, ingrese al menos 6 caracteres',
            'password.confirmed' => 'Las contraseñas ingresadas no coinciden',
            'imgPerfil.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
            'imgPerfil.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 512 KB',
            'validar.required' => 'Se requiere que ingrese la contraseña de validación',
            'validar.string' => 'La contraseña de validación ingresada contiene caracteres no válidos',
            'validar.in' => 'La contraseña de validación ingresada no coincide',
            'validar.min' => 'La contraseña de validación ingresada es demasiado corta',
            'validar.max' => 'La contraseña de validación ingresada es demasiado larga',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = app('request');
        if($request->hasFile('imgPerfil'))
        {
            $file = $request->file('imgPerfil');
            $namei = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/perfil/',$namei);

            return User::create([
                'name' => $data['name'],
                'perfil_img' => $namei,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }

        else
        {
            return User::create([
                'name' => $data['name'],
                'perfil_img' => 'UsuarioFoto.png',
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}

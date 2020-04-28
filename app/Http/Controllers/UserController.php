<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$user = Auth::user();
    	return view('auth.view-perfil', compact('user'));
    }

    public function edit(User $user)
    {
    	$user = Auth::user();
    	return view('auth.edit-perfil', compact('user'));
    }

    public function update(User $user)
    {
        $request = app('request');
        if($request->hasFile('imgPerfil'))
        {
            if(Auth::user()->email == request('email')) 
            {
            
                $this->validate(request(), [
                    'name' => 'required|string|max:255',
                    'password' => 'required|string|min:6|confirmed',
                    'imgPerfil' => 'mimes:jpeg,png,bmp,tiff,gif|max:512',
                ], [
                    'name.required' => 'Se requiere que ingrese un nombre de usuario',
                    'name.string' => 'El nombre de usuario ingresado contiene caracteres no válidos',
                    'name.max' => 'El nombre de usuario ingresado es demasiado largo',
                    'password.required' => 'Se requiere que ingrese una contraseña',
                    'password.string' => 'La contraseña ingresada contiene caracteres no válidos',
                    'password.min' => 'La contraseña ingresada es demasiado corta, ingrese al menos 6 caracteres',
                    'password.confirmed' => 'Las contraseñas ingresadas no coinciden',
                    'imgPerfil.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
                    'imgPerfil.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 512 KB',
                ]);

                $oldFile = public_path().'/images/perfil/'.$user->perfil_img;
                if(file_exists($oldFile) && ($user->perfil_img != 'UsuarioFoto.png'))
                {
                    unlink($oldFile);
                }

                $file = $request->file('imgPerfil');
                $namei = time().$file->getClientOriginalName();
                $file->move(public_path().'/images/perfil/',$namei);

                $user->name = request('name');
                $user->password = Hash::make(request('password'));
                $user->perfil_img = $namei;

                $user->save();

                return redirect()->route('perfil-usuario')->with('status','Actualización Exitosa');
            
            }

            else
            {
            
                $this->validate(request(), [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
                    'imgPerfil' => 'mimes:jpeg,png,bmp,tiff,gif|max:512',
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
                ]);

                $oldFile = public_path().'/images/perfil/'.$user->perfil_img;
                if(file_exists($oldFile) && ($user->perfil_img != 'UsuarioFoto.png'))
                {
                    unlink($oldFile);
                }

                $file = $request->file('imgPerfil');
                $namei = time().$file->getClientOriginalName();
                $file->move(public_path().'/images/perfil/',$namei);

                $user->name = request('name');
                $user->email = request('email');
                $user->password = Hash::make(request('password'));
                $user->perfil_img = $namei;

                $user->save();

                return redirect()->route('perfil-usuario')->with('status','Actualización Exitosa');
                
            }
        }

        else
        {
            if(Auth::user()->email == request('email')) 
            {
            
                $this->validate(request(), [
                    'name' => 'required|string|max:255',
                    'password' => 'required|string|min:6|confirmed',
                ], [
                    'name.required' => 'Se requiere que ingrese un nombre de usuario',
                    'name.string' => 'El nombre de usuario ingresado contiene caracteres no válidos',
                    'name.max' => 'El nombre de usuario ingresado es demasiado largo',
                    'password.required' => 'Se requiere que ingrese una contraseña',
                    'password.string' => 'La contraseña ingresada contiene caracteres no válidos',
                    'password.min' => 'La contraseña ingresada es demasiado corta, ingrese al menos 6 caracteres',
                    'password.confirmed' => 'Las contraseñas ingresadas no coinciden',
                ]);

                $user->name = request('name');
                $user->password = Hash::make(request('password'));

                $user->save();

                return redirect()->route('perfil-usuario')->with('status','Actualización Exitosa');
            
            }

            else
            {
            
                $this->validate(request(), [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6|confirmed',
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
                ]);

                $user->name = request('name');
                $user->email = request('email');
                $user->password = Hash::make(request('password'));

                $user->save();

                return redirect()->route('perfil-usuario')->with('status','Actualización Exitosa');
                
            }
        }
    }
}

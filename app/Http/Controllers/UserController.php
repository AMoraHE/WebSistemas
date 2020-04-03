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
            $oldFile = public_path().'/images/perfil/'.$user->perfil_img;
            if(file_exists($oldFile) && ($user->perfil_img != 'UsuarioFoto.png'))
            {
                unlink($oldFile);
            }

            $file = $request->file('imgPerfil');
            $namei = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/perfil/',$namei);

            if(Auth::user()->email == request('email')) 
            {
            
                $this->validate(request(), ['name' => 'required', 'password' => 'required|min:6|confirmed']);

                $user->name = request('name');
                $user->password = Hash::make(request('password'));
                $user->perfil_img = $namei;

                $user->save();

                return redirect()->route('perfil-usuario')->with('status','Actualización Exitosa');
            
            }

            else
            {
            
                $this->validate(request(), ['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:6|confirmed']);

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
            
                $this->validate(request(), ['name' => 'required', 'password' => 'required|min:6|confirmed']);

                $user->name = request('name');
                $user->password = Hash::make(request('password'));

                $user->save();

                return redirect()->route('perfil-usuario')->with('status','Actualización Exitosa');
            
            }

            else
            {
            
                $this->validate(request(), ['name' => 'required', 'email' => 'required|email|unique:users', 'password' => 'required|min:6|confirmed']);

                $user->name = request('name');
                $user->email = request('email');
                $user->password = Hash::make(request('password'));

                $user->save();

                return redirect()->route('perfil-usuario')->with('status','Actualización Exitosa');
                
            }
        }
    }
}

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

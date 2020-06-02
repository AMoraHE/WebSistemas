<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\rSocial;

class redSocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu-footer.agregar-footer-redes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $redes = rSocial::all();

        if(count($redes) < 6)
        {
            $validator = Validator::make($request->all(), [
            'icon' => 'required|mimes:jpeg,png,bmp,tiff,gif|max:512',
            'descripcion' => 'required|string',
            'enlace' => 'required|string',
            ], [
                'icon.required' => 'Se requiere que seleccione un archivo en formato JPEG, PNG, BMP, TIFF, GIF',
                'icon.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
                'icon.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 512 KB',
                'descripcion.required' => 'Se requiere que ingrese una descripción',
                'descripción.string' => 'La descripción ingresada contiene caracteres no válidos',
                'enlace.required' => 'Se requiere que ingrese un título',
                'enlace.string' => 'El título ingresado contiene caracteres no válidos',
            ]);

            if ($validator->fails()) {
                return redirect('/admin-footer-redes/create')
                            ->withErrors($validator)
                            ->withInput($request->all());
            }

            else
            {
                $red = new rSocial();

                if($request->hasFile('icon'))
                {
                    $file = $request->file('icon');
                    $name = time().$file->getClientOriginalName();
                    $red->icon = $name; 
                    $file->move(public_path().'/icon/',$name);
                }
        
                $red->descripcion = $request->input('descripcion');
                $red->enlace = $request->input('enlace');
                $red->slug = time();

                $red->save();
                    
                return redirect('/admin-footer')->with('status', 'Registro exitoso');
            }
        }

        else
        {
            return redirect('/admin-footer')->with('Error', 'Solo se pueden registrar como máximo 5 redes sociales');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $red = rSocial::where('slug', $slug)->firstOrFail();

        return view('admin.menu-footer.editar-footer-redes', compact('red'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $validator = Validator::make($request->all(), [
        'icon' => 'mimes:jpeg,png,bmp,tiff,gif|max:512',
        'descripcion' => 'required|string',
        'enlace' => 'required|string',
        ], [
            'icon.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
            'icon.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 512 KB',
            'descripcion.required' => 'Se requiere que ingrese una descripción',
            'descripción.string' => 'La descripción ingresada contiene caracteres no válidos',
            'enlace.required' => 'Se requiere que ingrese un título',
            'enlace.string' => 'El título ingresado contiene caracteres no válidos',
        ]);

        if ($validator->fails()) {
            return redirect('/admin-footer-redes/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $red = rSocial::where('slug', $slug)->firstOrFail();

            if($request->hasFile('icon'))
            {
                $file_path =public_path().'/icon/'.$red->icon;
                if(file_exists($file_path))
                {
                    unlink($file_path);
                }

                $file = $request->file('icon');
                $name = time().$file->getClientOriginalName();
                $red->icon = $name; 
                $file->move(public_path().'/icon/',$name);
            }
    
            $red->descripcion = $request->input('descripcion');
            $red->enlace = $request->input('enlace');

            $red->save();
                
            return redirect('/admin-footer')->with('status', 'Actualización exitosa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $red = rSocial::where('slug', $slug)->firstOrFail();

        $file_path =public_path().'/icon/'.$red->icon;
        if(file_exists($file_path))
        {
            unlink($file_path);
        }

        $red->delete();

        return redirect('/admin-footer')->with('status', 'Eliminación exitosa');
    }
}

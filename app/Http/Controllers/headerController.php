<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\header;
use App\subheader;

class headerController extends Controller
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
        $headers = header::all();
        $subheaders = subheader::all();

        return view('admin.menu-inicio.img-encabezado.encabezados', compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $header = header::where('slug', $slug)->firstOrFail();
        return view('admin.menu-inicio.img-encabezado.editar-encabezados', compact('header'));
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
            'img' => 'mimes:jpeg,png,bmp,tiff,gif|max:1024',
            'titulo' => 'required|string',
        ], [
            'img.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
            'img.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
            'titulo.required' => 'Se requiere que ingrese un título',
            'titulo.string' => 'El título ingresado contiene caracteres no válidos',
        ]);

        if ($validator->fails())
        {
            return redirect('/admin-header/'.$slug.'/edit')->withErrors($validator)->withInput($request->all());
        }

        else
        {
            $header = header::where('slug', '=', $slug)->firstOrFail();

            if($request->hasFile('img'))
            {
                $oldFile = public_path().'/img/'.$header->img;
                if(file_exists($oldFile))
                {
                    unlink($oldFile);
                }

                $file = $request->file('img');
                $name = time().$file->getClientOriginalName();
                $header->img = $name; 
                $file->move(public_path().'/img/',$name);
            }

            $header->titulo = $request->input('titulo');
            $header->save();

            return redirect('/admin-header')->with('status', 'Actualización exitosa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

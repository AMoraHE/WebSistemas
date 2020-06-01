<?php

namespace App\Http\Controllers;
use Validator;
use App\subheader;

use Illuminate\Http\Request;

class subHeaderController extends Controller
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
        $subheader = subheader::where('slug', $slug)->firstOrFail();

        return view('admin.menu-inicio.img-encabezado.editar-subencabezados', compact('subheader'));
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
            'sImg' => 'mimes:jpeg,png,bmp,tiff,gif|max:1024',
            'sTitulo' => 'required|string',
        ], [
            'sImg.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
            'sImg.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
            'sTitulo.required' => 'Se requiere que ingrese un título',
            'sTitulo.string' => 'El título ingresado contiene caracteres no válidos',
        ]);

        if ($validator->fails())
        {
            return redirect('/admin-header-sub/'.$slug.'/edit')->withErrors($validator)->withInput($request->all());
        }

        else
        {
            $subheader = subheader::where('slug', '=', $slug)->firstOrFail();

            if($request->hasFile('sImg'))
            {
                $oldFile = public_path().'/img/'.$subheader->sImg;
                if(file_exists($oldFile))
                {
                    unlink($oldFile);
                }

                $file = $request->file('sImg');
                $name = time().$file->getClientOriginalName();
                $subheader->sImg = $name; 
                $file->move(public_path().'/img/',$name);
            }

            $subheader->sTitulo = $request->input('sTitulo');
            $subheader->save();

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

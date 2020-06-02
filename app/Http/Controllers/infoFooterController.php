<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\contactosGen;
use App\infoFooter;
use App\rSocial;

class infoFooterController extends Controller
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
        $redes = rSocial::all();
        $infoFooter = infoFooter::all();
        $contactosGen = contactosGen::all();

        return view('admin.menu-footer.view-footer', compact('redes', 'infoFooter', 'contactosGen'));
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
        $infoFooter = infoFooter::where('slug', $slug)->firstOrFail();

        return view('admin.menu-footer.editar-footer-informacion', compact('infoFooter'));
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
        'descripcion' => 'required|string',
        ], [
              'img.mimes' => 'El formato del archivo seleccionado no es válido. Seleccione un archivo en formato: JPEG, PNG, BMP, TIFF, GIF',
              'img.max' => 'El tamaño del archivo seleccionado no debe ser mayor a 1 MB (1024 KB)',
              'titulo.required' => 'Se requiere que ingrese el título',
              'titulo.string' => 'El título ingresado contiene caracteres no válidos',
              'descripcion.required' => 'Se requiere que ingrese una descripción',
              'descripcion.string' => 'La descripción ingresada contiene caracteres no válidos',
            ]);

        if ($validator->fails()) {
            return redirect('/admin-footer-infoFooter/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $infoFooter = infoFooter::where('slug', $slug)->firstOrFail();

            if ($request->hasFile('img'))
            {
                $file_path =public_path().'/img/'.$infoFooter->img;
                if(file_exists($file_path))
                {
                    unlink($file_path);
                }

                $file = $request->file('img');
                $name2 = time().$file->getClientOriginalName();
                $file->move(public_path().'/img/',$name2);
                $infoFooter->img = $name2;
            }

            $infoFooter->descripcion =$request->input('descripcion');
            $infoFooter->titulo = $request->input('titulo');
            $infoFooter->save();

            return redirect('/admin-footer')->with('status', 'Actualización Exitosa');
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

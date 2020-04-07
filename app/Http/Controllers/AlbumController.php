<?php

namespace App\Http\Controllers;

use Validator;
use App\album;
use App\albumGaleria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = album::all();

        $imagenes = DB::table('album_galerias')->join('albums', 'album_galerias.albumSlug', '=', 'albums.slug')->select('album_galerias.*')->get();

        return view('/admin/menu-galeria/galeria/show', compact('albums', 'imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/menu-galeria/galeria/create');
    }

    public function agregar($slug)
    {
        $identificador = $slug;
        $imagenes = albumGaleria::where('albumSlug', '=', $slug)->get();

        return view('/admin/menu-galeria/galeria/agregar-img-galeria', compact('imagenes', 'identificador'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'imgPrin' => 'required|mimes:jpeg,png,bmp,tiff,gif',
        'descripcion' => 'required|string',
        'titulo' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/Album/create')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $album = new album();

            if($request->hasFile('imgPrin'))
            {
                $file = $request->file('imgPrin');
                $name = time().$file->getClientOriginalName();
                $album->imgPrin = $name; 
                $file->move(public_path().'/images/galeria/album/',$name);
            }
    
            $album->descripcion = $request->input('descripcion');
            $album->titulo = $request->input('titulo');
            $album->slug = time();

            $album->save();
                
            return redirect('/Album-Index')->with('status', 'Registro exitoso');
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
        $album = album::where('slug', '=', $slug)->firstOrFail();
        return view('/admin/menu-galeria/galeria/edit', compact('album'));
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
        'imgPrin' => 'mimes:jpeg,png,bmp,tiff,gif',
        'descripcion' => 'required|string',
        'titulo' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/Album/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $album = album::where('slug', '=', $slug)->firstOrFail();
            $album->fill($request->except('imgPrin'));

            if($request->hasFile('imgPrin'))
            {
                $oldFile = public_path().'/images/galeria/album/'.$album->imgPrin;
                if(file_exists($oldFile))
                {
                    unlink($oldFile);
                }

                $file = $request->file('imgPrin');
                $name = time().$file->getClientOriginalName();
                $album->imgPrin = $name; 
                $file->move(public_path().'/images/galeria/album/',$name);
            }

            $album->save();

            return redirect('/Album-Index')->with('status', 'Actualización exitosa');
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
        $imagen = albumGaleria::where('albumSlug', '=', $slug)->get();
        $album = album::where('slug', '=', $slug)->firstOrFail();

        foreach ($imagen as $image )
        {
            $oldFile = public_path().'/images/galeria/'.$image->imagen;
            if(file_exists($oldFile))
            {
                unlink($oldFile);
            }
        }

        $oldFile = public_path().'/images/galeria/album/'.$album->imgPrin;
        if(file_exists($oldFile))
        {
            unlink($oldFile);
        }

        albumGaleria::where('albumSlug', '=', $slug)->delete();
        $album->delete();

        return redirect('/Album-Index')->with('status','Eliminación Exitosa');
    }
}

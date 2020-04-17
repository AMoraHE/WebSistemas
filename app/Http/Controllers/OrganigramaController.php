<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Organigrama;
use App\Area;

class OrganigramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        //unir ambas tablas
        $organigramas = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->get();

        $areas=Area::all();
        
        return view('admin.menu-conocenos.organigrama.view-organigrama', compact('organigramas', 'areas'));
    }

    public function filtrar($nombre)
    {
        $organigramas = DB::table('organigramas')->join('areas', 'organigramas.area_id', '=', 'areas.id')->select('organigramas.*', 'areas.nombre')->where('areas.nombre', '=', $nombre)->get();

        $areas=Area::all();
        
        return view('admin.menu-conocenos.organigrama.view-organigrama', compact('organigramas', 'areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        return view('admin.menu-conocenos.organigrama.agregar-organigrama', compact('areas'));
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
            'imgOrg' => 'required|mimes:jpeg,png,bmp,tiff,gif',
            'area_id' => 'required|string',
            'puesto' => 'required|string',
            'nombre' => 'required|string',
            'genero_id' => 'required|string',
            'correo' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return redirect('/Agregar nuveo elemento')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $orga = new Organigrama;

            if ($request->hasFile('imgOrg'))
            {
                $file = $request->file('imgOrg');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/images/organigrama/',$name);
                $orga->foto = $name;
            }

            $orga->area_id = $request->get('area_id');
            $orga->puesto = $request->input('puesto');
            $orga->integrante = $request->input('nombre');
            $orga->genero = $request->get('genero_id');
            $orga->slug = time().$request->input('nombre');
            $orga->correo = $request->input('correo');
            $orga->save();

            return redirect()->route('Organigrama.index')->with('status','Inserción Exitosa');
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
        $Organigrama = Organigrama::where('slug', '=', $slug)->firstOrFail();
        
        $areas = Area::where('id', '=', $Organigrama->area_id)->firstOrFail();
        return view('admin.menu-conocenos.organigrama.editar-organigrama', compact('Organigrama', 'areas'));
        //return $Organigrama;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organigrama $Organigrama)
    {
        $validator = Validator::make($request->all(), [
            'imgOrg' => 'mimes:jpeg,png,bmp,tiff,gif',
            'puesto' => 'required|string',
            'integrante' => 'required|string',
            'genero_id' => 'required|string',
            'correo' => 'required|string|email',
        ]);

        if ($validator->fails()) {
            return redirect('/Organigrama/'.$Organigrama->slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            if ($request->hasFile('imgOrg'))
            {
                $oldFile = public_path().'/images/organigrama/'.$Organigrama->foto;
                if(file_exists($oldFile))
                {
                    unlink($oldFile);
                }

                $file = $request->file('imgOrg');
                $name = time().'-'.$file->getClientOriginalName();
                $file->move(public_path().'/images/organigrama/',$name);
                $Organigrama->foto = $name;
            }

            $Organigrama->integrante = $request->input('integrante');
            $Organigrama->puesto = $request->input('puesto');
            $Organigrama->genero = $request->get('genero_id');
            $Organigrama->correo = $request->input('correo');

            $Organigrama->save();

            return redirect()->route('Organigrama.index')->with('status','Actualización Exitosa');
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
        $Organigrama = Organigrama::where('slug', '=', $slug)->firstOrFail();
        $oldFile = public_path().'/images/organigrama/'.$Organigrama->foto;
        if(file_exists($oldFile))
        {
            unlink($oldFile);
        }

        $Organigrama->delete();
        return redirect()->route('Organigrama.index')->with('status','Eliminación exitosa');
    }
}

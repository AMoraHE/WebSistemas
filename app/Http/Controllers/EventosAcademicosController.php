<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventosAcademico;
use Validator;

class EventosAcademicosController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $eventos = EventosAcademico::orderBy('id', 'DESC')->paginate(5);
        return view('/admin/menu-academicos/Eventos/view', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('/admin/menu-academicos/Eventos/create');
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
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'doc' => 'required|mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-powerpoint,application/msword,application/vnd.ms-excel',
            'FInicio' => 'required|string',
            'FCierre' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/EventosAcademicos/create')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $evento = new EventosAcademico();

            if ($request->hasFile('doc'))
            {
                $file = $request->file('doc');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/docs/eventos/',$name);
                $evento->documento = $name;
            }

            $evento->titulo = $request->input('titulo');
            $evento->descripcion = $request->input('descripcion');
            $evento->FInicio = $request->input('FInicio');
            $evento->FCierre = $request->input('FCierre');
            $evento->slug = time();
            $evento->save();

            return redirect()->route('EventosAcademicos')->with('status','Registro Exitoso');



    }
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
          $evento = EventosAcademico::where('slug', '=', $slug)->firstOrFail();

        $name = $evento->documento;

        return response()->file('docs/eventos/'.$name);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function download($slug)
    {
        $evento = EventosAcademico::where('slug', '=', $slug)->firstOrFail();

        $name = $evento->documento;

        return response()->download('docs/eventos/'.$name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
         $evento = EventosAcademico::where('slug', '=', $slug)->firstOrFail();

        return view('/admin/menu-academicos/Eventos/edit', compact('evento'));
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
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'doc' => 'mimetypes:application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-powerpoint,application/msword,application/vnd.ms-excel',
            'FInicio' => 'required|string',
            'FCierre' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('/EventosAcademicos/'.$slug.'/edit')
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        else
        {
            $evento = EventosAcademico::where('slug', '=', $slug)->firstOrFail();

            if ($request->hasFile('doc'))
            {
                $oldFile = public_path().'/docs/eventos/'.$evento->documento;
                if(file_exists($oldFile))
                {
                    unlink($oldFile);
                }

                $file = $request->file('doc');
                $name = time().'-'.$file->getClientOriginalName();
                $file->move(public_path().'/docs/eventos/',$name);
                $evento->documento = $name;
            }

            $evento->titulo = $request->input('titulo');
            $evento->descripcion = $request->input('descripcion');
            $evento->FInicio = $request->input('FInicio');
            $evento->FCierre = $request->input('FCierre');
            $evento->save();

            return redirect()->route('EventosAcademicos')->with('status','Actualización Exitosa');
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
  		 $evento = EventosAcademico::where('slug', '=', $slug)->firstOrFail();

        $oldFile = public_path().'/docs/eventos/'.$evento->documento;
        if(file_exists($oldFile))
        {
            unlink($oldFile);
        }

        $evento->delete();
        
        return redirect()->route('EventosAcademicos')->with('status','Eliminación Exitosa');
	}
}

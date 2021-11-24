<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
     
    public function index()
    {
        $especialidad=Especialidad::all();

        return view('especialidad.index',['especialidad'=>$especialidad]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                 
        return view('especialidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especialidad=new Especialidad();
        $especialidad->nombre=$request->input('nombre');
        $especialidad->descripcion=$request->input('descripcion');
        $especialidad->save();
        return redirect()->route('especialidad.index');


    }
    public function edit($id)
    { 
        $especialidad=Especialidad::findOrFail($id);
        

        return view('especialidad.edit',['especialidad'=>$especialidad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $especialidad= Especialidad::findOrFail($id);
        $especialidad->nombre=$request->input('nombre');
        $especialidad->descripcion=$request->input('descripcion');
        $especialidad->save();
        return redirect()->route('especialidad.index');
    }


    public function destroy($id)
   {
       $persona=Especialidad::findOrFail($id);
       $persona->delete();
       return redirect()->route('especialidad.index');
   }
}

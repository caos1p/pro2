<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Personal;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{  public function __construct()
	{
		$this->middleware('auth');
	} 
     
    public function index()
    {
        $especialidad=Especialidad::all();

        return view('administrador.especialidad.index',['especialidad'=>$especialidad]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {                 
        return view('administrador.especialidad.create');
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
        

        return view('administrador.especialidad.edit',['especialidad'=>$especialidad]);
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
    $idp=Personal::where('especialidad_id', $id)->pluck('id')->first();
    if($idp>0){     
     return redirect()->route('especialidad.index')->with(['message'=>'No se puede eliminar por que otros registros dependen de este elemento ']);
    }
    $persona=Especialidad::findOrFail($id);
    $persona->delete();
    return redirect()->route('especialidad.index')->with(['messages'=>'Se elimino correctamente']);
      
   }
}

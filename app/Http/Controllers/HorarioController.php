<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Personal;
use Illuminate\Http\Request;

class HorarioController extends Controller
{  public function __construct()
	{
		$this->middleware('auth');
	} 
    public function index()
    {
        $horario=Horario::all();

        return view('administrador.horario.index',['horario'=>$horario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.horario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario=new Horario();
        $horario->horaentrada=$request->input('horaentrada');
        $horario->horadesalida=$request->input('horadesalida');
        $horario->turno=$request->input('turno');
        $horario->save();
        return redirect()->route('horario.index');


    }
    public function edit($id)
    { 
        $horario=Horario::findOrFail($id);

        return view('administrador.horario.edit',['horario'=>$horario]);
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
        $horario= Horario::findOrFail($id);
        $horario->horaentrada=$request->input('horaentrada');
        $horario->horadesalida=$request->input('horadesalida');
        $horario->turno=$request->input('turno');
        $horario->save();
        return redirect()->route('horario.index');
    }


    public function destroy($id)
   {     
    $idp=Personal::where('horario_id', $id)->pluck('id')->first();
    if($idp>0){     
     return redirect()->route('horario.index')->with(['message'=>'No se puede eliminar por que otros registros dependen de este elemento ']);
    }
     $persona=Horario::findOrFail($id);
     $persona->delete();
     return redirect()->route('horario.index')->with(['messages'=>'Se elimino correctamente']);



   }
}

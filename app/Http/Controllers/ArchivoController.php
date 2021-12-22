<?php

namespace App\Http\Controllers;

use App\Events\subirdocumento;
use App\Models\Archivo;
use App\Models\Paciente;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	} 
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $id=auth()->user()->id;
        $idp=Paciente::where('usuario_id', $id)->pluck('id')->first();
        $pdf=$request->file("archivo")->getClientOriginalName();
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        
        $archivo=new Archivo();
        $archivo->archivo=$request->file("archivo")->store('public');
        $archivo->nombre=$pdf;
        $archivo->fecha=$date;
        $archivo->paciente_id=$idp;
        $archivo->save();

        event(new subirdocumento(  $archivo));


        return redirect()->route('citamedica.vistadecita')->with(['message'=>'Se ha subido el archivo correctamente ']);


    }
}

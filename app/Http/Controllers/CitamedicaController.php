<?php

namespace App\Http\Controllers;

use App\Models\Citamedica;
use App\Models\Especialidad;
use App\Models\Paciente;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitamedicaController extends Controller
{
    public function index(Request $request)
    {
        $fecha=$request->get('fecha');
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
      

        if($fecha){
        $agenda=Citamedica::where('start','=', $fecha)->orderBy('id','asc')-> paginate(10);
        $agenda->load('paciente');
        return view('citamedica.index',['agenda'=>$agenda]);
    }
   
    $agenda=Citamedica::where('start','=', $date)->orderBy('id','asc')-> paginate(10);
    $agenda->load('paciente');
    return view('citamedica.index',['agenda'=>$agenda]);
  
  

    
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vistadecita()
    {
        $email=auth()->user()->email;
        $idp=Paciente::where('email', $email)->pluck('id')->first();
        $title=Citamedica::where('paciente_id', $idp)->pluck('title')->first();
        $start=Citamedica::where('paciente_id', $idp)->pluck('start')->first();
        $end=Citamedica::where('paciente_id', $idp)->pluck('end')->first();
        $id=Citamedica::where('paciente_id', $idp)->pluck('especialidad_id')->first();
        $nombre=Especialidad::where('id', $id)->pluck('nombre')->first();

        return view('citamedica.vistadecita',['title'=>$title,'start'=>$start,'nombre'=>$nombre,'end'=>$end]);
    }


}

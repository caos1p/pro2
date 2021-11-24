<?php

namespace App\Http\Controllers;

use App\Models\Citamedica;
use App\Models\Diagnostico;
use App\Models\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function index()
    {
        $paciente=Paciente::all();
        return view('paciente.index',['paciente'=>$paciente]);
    }
    

    public function showinterrogatorio($id)
    {
        $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();
        $paciente=Paciente::findOrFail($idp);
        return view('historial.indexinterrogatorio',['paciente'=>$paciente,'id'=>$id]);
    }
    public function showdiagnostico($id)
    {  $date = Carbon::now();
       $date = $date->format('Y-m-d');
       $diagnostico=Diagnostico::where('paciente_id','=', $id)->get();
       $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();
       $paciente=Paciente::findOrFail($idp);
       return view('historial.indexdiagnostico',['paciente'=>$paciente,'diagnostico'=>$diagnostico,'date'=>$date,'id'=>$id]);
    }
    public function showarchivo($id)
    {
        $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();
        $paciente=Paciente::findOrFail($idp);
        return view('historial.indexarchivo',['paciente'=>$paciente,'id'=>$id]);
    }
}

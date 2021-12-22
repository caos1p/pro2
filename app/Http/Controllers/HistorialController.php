<?php

namespace App\Http\Controllers;

use App\Models\Antecedente;
use App\Models\Archivo;
use App\Models\Citamedica;
use App\Models\Diagnostico;
use App\Models\Paciente;
use App\Models\Recetamedica;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HistorialController extends Controller
{ public function __construct()
	{
		$this->middleware('auth');
	} 
    public function index()
    {
        $paciente=Paciente::all();
        if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
        return view('administrador.paciente.index',['paciente'=>$paciente]);
        }
        return view('usuario.paciente.index',['paciente'=>$paciente]);

    }
    

    public function showdiagnostico(Request $request, $id)
    {    $numero=$request->get('fecha');

         $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();
        $idb=Citamedica::where('id', $id)->pluck('personal_id')->first();

       $date = Carbon::now();
       $date = $date->format('Y-m-d');
       $diagnostico=Diagnostico::where('personal_id', $idb)->where('citamedica_id', $id)->get();
       $existe=Diagnostico::where('citamedica_id', $id)->pluck('id')->first();

       $diagnostico->load('personal');
       $diagnostico->load('citamedica');
       $diagnostico->load('recetamedica');

       $receta=Recetamedica::all();

       $paciente=Paciente::findOrFail($idp);
       $antecedente=Antecedente::where('paciente_id', $paciente->id)->pluck('id')->first();

       if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
        return view('administrador.historial.indexdiagnostico',['numero'=>$numero,'existe'=>$existe,'antecedente'=>$antecedente,'receta'=>$receta,'diagnostico'=>$diagnostico,'paciente'=>$paciente,'date'=>$date,'id'=>$id]);
        }
        return view('usuario.historial.indexdiagnostico',['numero'=>$numero,'existe'=>$existe,'antecedente'=>$antecedente,'receta'=>$receta,'diagnostico'=>$diagnostico,'paciente'=>$paciente,'date'=>$date,'id'=>$id]);
    }

    public function showarchivo($id)
    { 
         $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();
        $paciente=Paciente::findOrFail($idp);
        $antecedente=Antecedente::where('paciente_id', $paciente->id)->pluck('id')->first();
        $archivo=Archivo::where('paciente_id',  $paciente->id)->get();

        if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
            return view('administrador.historial.indexarchivo',['archivo'=>$archivo,'antecedente'=>$antecedente,'paciente'=>$paciente,'id'=>$id]);
            }
            return view('usuario.historial.indexarchivo',['archivo'=>$archivo,'antecedente'=>$antecedente,'paciente'=>$paciente,'id'=>$id]);
        
    }
}

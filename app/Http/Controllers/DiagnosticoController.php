<?php

namespace App\Http\Controllers;

use App\Events\creardiagnostico;
use App\Http\Middleware\Paciente;
use App\Models\Citamedica;
use App\Models\Diagnostico;
use App\Models\Paciente as ModelsPaciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiagnosticoController extends Controller
{public function __construct()
	{
		$this->middleware('auth');
	} 
   

    public function store(Request $request)
    { 
        $id=$request->get('id');
        $diagnostic=new Diagnostico();
        $diagnostic->diagnostico=$request->input('enfermedad');
        $diagnostic->citamedica_id= $id;
        $diagnostic->personal_id= Auth::user()->personal[0]->id; 
        $diagnostic->save();
        event(new creardiagnostico(  $diagnostic));

        return redirect()->route('historial.showdiagnostico',[$id]);


    }
}

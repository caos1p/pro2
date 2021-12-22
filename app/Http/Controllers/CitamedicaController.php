<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Usuario;
use App\Models\Citamedica;
use App\Models\Especialidad;
use App\Models\Paciente;
use App\Models\Personal;
use App\Models\Recetamedica;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitamedicaController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	} 
    public function index(Request $request)
    {
        $fecha=$request->get('fecha');
        $date = Carbon::now();
        $date = $date->format('Y-m-d');

            $user=Auth::user()->id;
            $personal=Personal::where('usuario_id',$user)->pluck('id')->first();
            if($fecha){
                $agenda=Citamedica::where('start','=', $fecha)->where('personal_id','=', $personal)->orderBy('id','asc')-> paginate(10);
                $agenda->load('paciente');
                return view('usuario.citamedica.index',['agenda'=>$agenda]);
            }
           
            $agenda=Citamedica::where('start','=', $date)->where('personal_id','=', $personal)->orderBy('id','asc')-> paginate(10);
            $agenda->load('paciente');
            return view('usuario.citamedica.index',['agenda'=>$agenda]);
        
    }
    public function buscarsemana(Request $request)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $fechaComoEntero = strtotime($date);
        $mes = date("m", $fechaComoEntero);

            $user=Auth::user()->id;
            $personal=Personal::where('usuario_id',$user)->pluck('id')->first();
            $agenda=Citamedica::where('personal_id','=', $personal)->get();
            $a=Citamedica::where('start', '>=', $date)->where('start', '<=', $date)->where('personal_id','=', $personal)->get();

            return $a;

                $agenda=Citamedica::where('start','=', $mes)->where('personal_id','=', $personal)->orderBy('id','asc')-> paginate(10);
                $agenda->load('paciente');
                return view('usuario.citamedica.index',['agenda'=>$agenda]);
    
    }

    public function buscarmes(Request $request)
    {
        $fecha=$request->get('fecha');
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
      
        if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
            if($fecha){
                $agenda=Citamedica::where('start','=', $fecha)->orderBy('id','asc')-> paginate(10);
                $agenda->load('paciente');
                return view('administrador.citamedica.index',['agenda'=>$agenda]);
            }
           
            $agenda=Citamedica::where('start','=', $date)->orderBy('id','asc')-> paginate(10);
            $agenda->load('paciente');
            return view('administrador.citamedica.index',['agenda'=>$agenda]);
            }

            $user=Auth::user()->id;
            $personal=Personal::where('usuario_id',$user)->pluck('id')->first();
            if($fecha){
                $agenda=Citamedica::where('start','=', $fecha)->where('personal_id','=', $personal)->orderBy('id','asc')-> paginate(10);
                $agenda->load('paciente');
                return view('usuario.citamedica.index',['agenda'=>$agenda]);
            }
           
            $agenda=Citamedica::where('start','=', $date)->where('personal_id','=', $personal)->orderBy('id','asc')-> paginate(10);
            $agenda->load('paciente');
            return view('usuario.citamedica.index',['agenda'=>$agenda]);
        
    }
    public function todos(Request $request)
    {
      
            $user=Auth::user()->id;
            $personal=Personal::where('usuario_id',$user)->pluck('id')->first();
            $agenda=Citamedica::where('personal_id','=', $personal)->orderBy('id','asc')-> paginate(10);
            $agenda->load('paciente');
            return view('usuario.citamedica.index',['agenda'=>$agenda]);
    
    }
    public function hoy()
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');

            $user=Auth::user()->id;
            $personal=Personal::where('usuario_id',$user)->pluck('id')->first();
           
            $agenda=Citamedica::where('start','=', $date)->where('personal_id','=', $personal)->orderBy('id','asc')-> paginate(10);
            $agenda->load('paciente');
            return view('usuario.citamedica.index',['agenda'=>$agenda]);
        
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
        $id=auth()->user()->id;
        $idp=Paciente::where('usuario_id', $id)->pluck('id')->first();

        $title=Citamedica::where('paciente_id', $idp)->pluck('title')->first();

        $start=Citamedica::where('paciente_id', $idp)->pluck('start')->first();

        $end=Citamedica::where('paciente_id', $idp)->pluck('end')->first();

        $ide=Citamedica::where('paciente_id', $idp)->pluck('especialidad_id')->first();
        $idpe=Citamedica::where('paciente_id', $idp)->pluck('personal_id')->first();

        $medico=Personal::where('id', $idpe)->get();
        $medico->load('especialidad');


        $usuario=User::where('id', $id)->get();



        return view('paciente.citamedica.vistadecita',['usuario'=>$usuario,'title'=>$title,'start'=>$start,'medico'=>$medico,'end'=>$end]);
    }
    public function citadepersonal($id)
    {
        $cita=Citamedica::where('paciente_id', $id)->with('diagnostico', 'diagnostico.recetamedica')->get();
        $cita->load('paciente');
     





        return view('usuario.citamedica.citasdepaciente',['cita'=>$cita]);
    }



}

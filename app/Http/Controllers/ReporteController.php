<?php

namespace App\Http\Controllers;

use App\Listeners\registrariniciarsesion;
use App\Models\Citamedica;
use App\Models\Paciente;
use App\Models\servicio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index(Request $request)
    {  $fechaini=$request->get('fechainicio');
        $fechafi=$request->get('fechafin');
      

        if(  $fechaini){
        $cita=Citamedica::where('start','>=', $fechaini)->where('start','<=', $fechafi)->  orderBy('id','desc')-> paginate(7);
    
        $cita->load('paciente');
        return view('administrador.reporte.index',['cita'=>$cita,'fechaini'=>$fechaini,'fechafi'=>$fechafi]);
    }
    $cita=Citamedica::orderBy('id','desc')-> paginate(7);
    $cita->load('paciente');
    $fechaini=1;
    $fechafi=1;
    return view('administrador.reporte.index',['cita'=>$cita,'fechaini'=>$fechaini,'fechafi'=>$fechafi]);

    }
    public function index1(Request $request)
    { $fecha = Paciente::select('created_at') ;
      $fechas= Carbon::parse($fecha)->format('Y/m/d');
       return $fechas;
        $fechaini=$request->get('fechainicio');
        $fechafi=$request->get('fechafin');

        if(  $fechaini){
        $paciente=Paciente::where('created_at','>=', $fechaini)->where('created_at','<=', $fechafi)->  orderBy('id','desc')-> paginate(7);
    
        return view('administrador.reporte.index1',['paciente'=>$paciente,'fechaini'=>$fechaini,'fechafi'=>$fechafi]);
    }
    $paciente=Paciente::orderBy('id','desc')-> paginate(7);
    $fechaini=1;
    $fechafi=1;
    return view('administrador.reporte.index1',['paciente'=>$paciente,'fechaini'=>$fechaini,'fechafi'=>$fechafi]);

    }
}
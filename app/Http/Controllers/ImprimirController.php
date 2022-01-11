<?php

namespace App\Http\Controllers;

use App\Events\enviarrecetaagmail;
use App\Events\exportarapdf;
use App\Models\Citamedica;
use App\Models\Diagnostico;
use App\Models\Personal;
use App\Models\Recetamedica;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ImprimirController extends Controller
{
   public function imprimirreceta($id)
{
    $receta=Recetamedica:: findOrFail($id);
    $diagnostico=Diagnostico::where('id', $receta->diagnostico_id)->get();
    $cita=Citamedica::where('id', $diagnostico[0]->citamedica_id)->get();
    $personal=Personal::where('id', $cita[0]->personal_id)->get();

    $personal->load('especialidad');
    $cita->load('paciente');

    $pdf = \PDF::loadView('usuario.recetamedica.index', ['personal'=>$personal,'receta'=>$receta,'cita'=>$cita,'diagnostico'=>$diagnostico]);
    event(new exportarapdf(  $receta));

    return $pdf->stream('archivo.pdf');
}
public function enviaremailreceta($id)
{
    $receta=Recetamedica:: findOrFail($id);
    $diagnostico=Diagnostico::where('id', $receta->diagnostico_id)->get();
    $cita=Citamedica::where('id', $diagnostico[0]->citamedica_id)->get();
    $personal=Personal::where('id', $cita[0]->personal_id)->get();
    $personal->load('especialidad');
    $cita->load('paciente');
    $pdf = \PDF::loadView('usuario.recetamedica.index', ['personal'=>$personal,'receta'=>$receta,'cita'=>$cita,'diagnostico'=>$diagnostico]);

    Mail::send('usuario.recetamedica.index', ['personal'=>$personal,'receta'=>$receta,'cita'=>$cita,'diagnostico'=>$diagnostico], 
    function($mail) use ($cita, $pdf){
        $mail->to($cita[0]->paciente->email,$cita[0]->paciente->nombre)->subject('Consultorio Medica XYZ')  ->attachData($pdf->output(), "receta.pdf");});
        event(new enviarrecetaagmail(  $receta));

    return redirect()->route('historial.showdiagnostico',[$cita[0]->id])->with(['message'=>'El email se ha enviado correctamente']);


}
public function imprimirreporte($fechaini,$fechafi)
{
    $date = Carbon::now();
       $date = $date->format('Y-m-d');
    if ( $fechaini!=1){
        $proforma=Citamedica::where('start','>=', $fechaini)->where('start','<=', $fechafi)->  orderBy('id','desc')-> paginate(7);
    $proforma->load('paciente');
    $pdf = \PDF::loadView('administrador.reporte.vistaimprimir', ['proforma'=>$proforma,'date'=>$date]);
    return $pdf->stream('archivo.pdf');
}
$proforma=Citamedica::orderBy('id','desc')-> paginate(7);
$proforma->load('paciente');
$pdf = \PDF::loadView('administrador.reporte.vistaimprimir', ['proforma'=>$proforma,'date'=>$date]);
return $pdf->stream('archivo.pdf');
}
public function imprimirreporte1($fechaini,$fechafi)
{
    $date = Carbon::now();
    if ( $fechaini!=1){
        $proforma=Compra::where('created_at','>=', $fechaini)->where('created_at','<=', $fechafi)->  orderBy('id','desc')-> paginate(7);
    $proforma->load('proveedor');
    $pdf = \PDF::loadView('reporte.vistaimprimirfactura', ['proforma'=>$proforma,'date'=>$date]);
    return $pdf->stream('archivo.pdf');
}
$proforma=Compra:: orderBy('id','desc')-> paginate(7);
$proforma->load('proveedor');
$pdf = \PDF::loadView('reporte.vistaimprimirfactura', ['proforma'=>$proforma,'date'=>$date]);
return $pdf->stream('archivo.pdf');
}
}

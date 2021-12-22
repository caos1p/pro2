<?php

namespace App\Http\Controllers;

use App\Events\enviarrecetaagmail;
use App\Events\exportarapdf;
use App\Models\Citamedica;
use App\Models\Diagnostico;
use App\Models\Personal;
use App\Models\Recetamedica;
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
}

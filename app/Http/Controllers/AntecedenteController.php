<?php

namespace App\Http\Controllers;

use App\Events\crearantecedentesfamiliares;
use App\Events\crearantecedentespersonales;
use App\Events\editarantecedentefamiliar;
use App\Events\editarantecedentepersonal;
use App\Models\Antecedente;
use App\Models\Antecedentefamiliar;
use App\Models\Citamedica;
use Illuminate\Http\Request;

class AntecedenteController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	} 
    public function create($id)
    {
        return view('usuario.antecedente.create',['id'=>$id]);
    }
    public function store(Request $request) 
    {   $id=$request->get('id');
        $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();

   
        $antecedente=new Antecedente();
        $antecedente->comida= $request->input('comida');
        $antecedente->cantidad=$request->input('cantidad');
        $antecedente->calidad= $request->input('calidad');
        $antecedente->agua= $request->input('agua');
        $antecedente->piso= $request->input('piso');
        $antecedente->ventilacion= $request->input('ventilacion');
        $antecedente->iluminacion= $request->input('iluminacion');
        $antecedente->duerme= $request->input('duerme');
        $antecedente->bañodiario= $request->input('bañodiario');
        $antecedente->lavadomanos= $request->input('lavadomanos');
        $antecedente->cambioderopa= $request->input('cambioderopa');
        $antecedente->higienebucal=$request->input('higienebucal');
        $antecedente->infancia=$request->input('infancia');
        $antecedente->reciente= $request->input('reciente');
        $antecedente->alcoholismo= $request->input('alcoholismo');
        $antecedente->tabaquismo= $request->input('tabaquismo');
        $antecedente->drogadiccion= $request->input('drogadiccion');
        $antecedente->otros= $request->input('otros');
        $antecedente->antecedentesquirurgicos= $request->input('antecedentesquirurgicos');
        $antecedente->transfuciones= $request->input('transfuciones');
        $antecedente->alergias=$request->input('alergias');
        $antecedente->enfermedades=$request->input('enfermedades');
        $antecedente->paciente_id= $idp;
        $antecedente->save();
        event(new crearantecedentespersonales(  $antecedente));


        $antecedentefa=new Antecedentefamiliar();
        $antecedentefa->abuelosvivos= $request->input('abuelosvivos');
        $antecedentefa->enfermedadquepadeceabuelos= $request->input('enfermedadquepadeceabuelos');
        $antecedentefa->padrevivo= $request->input('padrevivo');
        $antecedentefa->enfermedadquepadecepadre= $request->input('enfermedadquepadecepadre');
        $antecedentefa->madrevivo= $request->input('madrevivo');
        $antecedentefa->enfermedadquepadecemadre= $request->input('enfermedadquepadecemadre');
        $antecedentefa->hermanosvivos= $request->input('hermanosvivos');
        $antecedentefa->enfermedadquepadecehermano= $request->input('enfermedadquepadecehermano');
        $antecedentefa->otros= $request->input('otros');
        $antecedentefa->paciente_id= $idp;
        $antecedentefa->save();
        event(new crearantecedentesfamiliares(  $antecedente));

        return redirect()->route('historial.showdiagnostico',[$id])->with(['message'=>'Se ha registrado correctamente']);




    }
    public function show($id)
    {

        $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();
        $antecedentepersonal=Antecedente::where('paciente_id', $idp)->get();
        $antecedentefamiliar=Antecedentefamiliar::where('paciente_id', $idp)->get();
        return view('usuario.antecedente.show',['id'=>$id,'antecedentefamiliar'=>$antecedentefamiliar,'antecedentepersonal'=>$antecedentepersonal]);

    }
    public function edit($id)
    { 
   
        $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();
        $antecedentepersonal=Antecedente::where('paciente_id', $idp)->get();
        $antecedentefamiliar=Antecedentefamiliar::where('paciente_id', $idp)->get();
        return view('usuario.antecedente.edit',['id'=>$id,'antecedentefamiliar'=>$antecedentefamiliar,'antecedentepersonal'=>$antecedentepersonal]);

    }

    public function update(Request $request) 
    {   $id=$request->get('id');
        $idp=Citamedica::where('id', $id)->pluck('paciente_id')->first();
        $antecedentepersonal=Antecedente::where('paciente_id', $idp)->pluck('id')->first();
        $antecedentefamiliar=Antecedentefamiliar::where('paciente_id', $idp)->pluck('id')->first();

   
        $antecedente=Antecedente::findOrFail($antecedentepersonal);
        $antecedente->comida= $request->input('comida');
        $antecedente->cantidad=$request->input('cantidad');
        $antecedente->calidad= $request->input('calidad');
        $antecedente->agua= $request->input('agua');
        $antecedente->piso= $request->input('piso');
        $antecedente->ventilacion= $request->input('ventilacion');
        $antecedente->iluminacion= $request->input('iluminacion');
        $antecedente->duerme= $request->input('duerme');
        $antecedente->bañodiario= $request->input('bañodiario');
        $antecedente->lavadomanos= $request->input('lavadomanos');
        $antecedente->cambioderopa= $request->input('cambioderopa');
        $antecedente->higienebucal=$request->input('higienebucal');
        $antecedente->infancia=$request->input('infancia');
        $antecedente->reciente= $request->input('reciente');
        $antecedente->alcoholismo= $request->input('alcoholismo');
        $antecedente->tabaquismo= $request->input('tabaquismo');
        $antecedente->drogadiccion= $request->input('drogadiccion');
        $antecedente->otros= $request->input('otros');
        $antecedente->antecedentesquirurgicos= $request->input('antecedentesquirurgicos');
        $antecedente->transfuciones= $request->input('transfuciones');
        $antecedente->alergias=$request->input('alergias');
        $antecedente->enfermedades=$request->input('enfermedades');
        $antecedente->paciente_id= $idp;
        $antecedente->save();
        event(new editarantecedentepersonal(  $antecedente));


        $antecedentefa=Antecedentefamiliar::findOrFail($antecedentefamiliar);
        $antecedentefa->abuelosvivos= $request->input('abuelosvivos');
        $antecedentefa->enfermedadquepadeceabuelos= $request->input('enfermedadquepadeceabuelos');
        $antecedentefa->padrevivo= $request->input('padrevivo');
        $antecedentefa->enfermedadquepadecepadre= $request->input('enfermedadquepadecepadre');
        $antecedentefa->madrevivo= $request->input('madrevivo');
        $antecedentefa->enfermedadquepadecemadre= $request->input('enfermedadquepadecemadre');
        $antecedentefa->hermanosvivos= $request->input('hermanosvivos');
        $antecedentefa->enfermedadquepadecehermano= $request->input('enfermedadquepadecehermano');
        $antecedentefa->otros= $request->input('otros');
        $antecedentefa->paciente_id= $idp;
        $antecedentefa->save();
        event(new editarantecedentefamiliar(  $antecedente));

        return redirect()->route('historial.showdiagnostico',[$id])->with(['message'=>'Se ha guardado correctamente']);




    }
}

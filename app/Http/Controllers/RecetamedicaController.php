<?php

namespace App\Http\Controllers;

use App\Events\crearreceta;
use App\Models\Recetamedica;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RecetamedicaController extends Controller
{ public function __construct()
	{
		$this->middleware('auth');
	} 
    public function index()
    {
        
        return view('usuario.recetamedica.index');
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha=Carbon::now()->toDateString();
        $prescripcion=$request->get('enfermedad');
        $diagnostico_id=$request->get('iddiagnostico');
        $id=$request->get('idcita');

        $receta=new Recetamedica();
        $receta->fecha=$fecha;
        $receta->prescripcion= $prescripcion;
        $receta->diagnostico_id= $diagnostico_id;
        $receta->save();
        event(new crearreceta(  $receta));

        return redirect()->route('historial.showdiagnostico',[$id]);


    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Citamedica;
use App\Models\Personal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{ public function __construct()
	{
		$this->middleware('auth');
	} 
        
    public function index()
    {   $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $user=Auth::user()->id;
        $personal=Personal::where('usuario_id',$user)->pluck('id')->first();
        $agenda=Citamedica::where('personal_id','=', $personal)->get();
        if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
            return view('administrador.agenda.index',['agenda'=>$agenda,'date'=>$date]);
            }
      
            return view('usuario.agenda.index',['agenda'=>$agenda,'date'=>$date]);
    }

    public function reunion()
    {
        $agenda=Agenda::orderBy('id','asc')-> paginate(1);
        if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
            return view('administrador.agenda.reunion',['agenda'=>$agenda]);
            }

            $user=Auth::user()->id;
            $personal=Personal::where('usuario_id',$user)->pluck('id')->first();

            return view('usuario.agenda.reunion',['agenda'=>$agenda]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agenda=new Agenda();
        $agenda->title=$request->input('titulo');
        $agenda->start=$request->input('fecha');
        $agenda->end=$request->input('hora');
        $agenda->save();
        if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
            return view('administrador.agenda.index');
            }
            return view('usuario.agenda.index');


    }
    public function show()
    {

        $user=Auth::user()->id;
        $personal=Personal::where('usuario_id',$user)->pluck('id')->first();
        $agenda=Citamedica::where('personal_id','=', $personal)->get();
        return response()->json($agenda);

    }
      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda=Citamedica::findOrFail($id);
        return response()->json($agenda);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Citamedica;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
        
    public function index()
    {
       

        return view('agenda.index');
    }
    public function reunion()
    {
        $agenda=Agenda::orderBy('id','asc')-> paginate(1);

        return view('agenda.reunion',['agenda'=>$agenda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agenda.create');
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
        return view('agenda.index');


    }
    public function show()
    {


        $agenda=Citamedica::all();
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
        $agenda=Agenda::findOrFail($id);
        return response()->json($agenda);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    
    public function index()
    {
        $cargo=Cargo::all();

        return view('cargo.index',['cargo'=>$cargo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo=new Cargo();
        $cargo->nombre=$request->input('nombre');
        $cargo->sueldo=$request->input('sueldo');
        $cargo->save();
        return redirect()->route('cargo.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $cargo=cargo::findOrFail($id);
        return view('cargo.show',['cargo'=>$cargo]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=cargo::findOrFail($id);
        return view('cargo.edit',['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo= cargo::findOrFail($id);
        $tipo->cargo=$request->input('cargo');
        $tipo->sueldo=$request->input('sueldo');
        $tipo->horario=$request->input('horario');
        $tipo->save();
        event(new editarcargo(  $tipo));
        return redirect()->route('cargo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona=cargo::findOrFail($id);
        $persona->delete();
        event(new eliminarcargo(   $persona));
        return redirect()->route('cargo.index');
    }
}

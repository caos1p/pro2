<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $roles=Rol::orderBy('id','desc')-> paginate(10);
        return view('rol.index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol=new Rol();
        $rol->nombre=$request->input('nombre');
        $rol->save();
        return redirect()->route('rol.index');


    }
    public function edit($id)
    { 
        $rol=Rol::findOrFail($id);
        

        return view('rol.edit',['rol'=>$rol]);
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
        $rol= Rol::findOrFail($id);
        $rol->nombre=$request->input('nombre');
        $rol->save();
        return redirect()->route('rol.index');
    }
    public function destroy($id)
    {
        $persona=Rol::findOrFail($id);
        $persona->delete();
        return redirect()->route('rol.index');
    }
}

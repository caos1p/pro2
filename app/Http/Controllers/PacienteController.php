<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\User;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $paciente=Paciente::all();
        return view('paciente.index',['paciente'=>$paciente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
        return view('paciente.create');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
       
        $usuario=new User();
        $usuario->name= $request->input('nombre');
        $usuario->email=$request->input('email');
        $usuario->tipo='paciente';
        $usuario->password=bcrypt($request->input('contraseña'));
        $usuario->save();

        $paciente=new Paciente();
        $paciente->nombre= $request->input('nombre');
        $paciente->apellidopaterno= $request->input('apellidopaterno');
        $paciente->apellidomaterno= $request->input('apellidomaterno');
        $paciente->ci= $request->input('ci');
        $paciente->telefono= $request->input('telefono');
        $paciente->direccion= $request->input('direccion');
        $paciente->email= $request->input('email');
        $paciente->fechadenacimiento= $request->input('fechadenacimiento');
        $paciente->genero= $request->input('genero');
        $paciente->pais= $request->input('pais');
        $paciente->usuario_id=   $usuario->id;
        $paciente->save();
        return redirect()->route('paciente.index');
    }


}

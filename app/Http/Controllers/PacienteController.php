<?php

namespace App\Http\Controllers;

use App\Models\Citamedica;
use App\Models\Especialidad;
use App\Models\Paciente;
use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $nombre=$request->get('buscarpaciente');
        $paciente=Paciente::where('ci','like','%'.$nombre .'%')->orderBy('id','asc')-> paginate(10);
        return view('paciente.index',['paciente'=>$paciente]);
    }
    public function show()
    {


        $agenda=Citamedica::all();
        return response()->json($agenda);

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
        $usuario->rol_id=3;
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

        $term=$request->get('email');
        $id=Paciente::where('email','=',$term)->pluck('id')->first();
        return redirect()->route('citamedica.create',[$id]);

    }
    public function createcita(Request $request,$id )
    { 
     
        $especial=Especialidad::get();
        return view('citamedica.create',['id'=>$id,'especial'=>$especial]);
    }
    public function storecita(Request $request, $id)
    {
        $agenda=new Citamedica();
        $agenda->title=$request->input('motivo');
        $agenda->start=$request->input('fecha');
        $agenda->end=$request->input('hora');
        $agenda->especialidad_id=$request->input('especialidad_id');
        $agenda->paciente_id= $id;

        $agenda->save();
        return redirect()->route('login1');




    }
    public function buscador(Request $request){
        $term=$request->get('term');
        $persona=Paciente::where('ci','like','%'.$term .'%')->orderBy('ci','ASC')->select('ci as label')->get();
        return $persona;
        
    }


}

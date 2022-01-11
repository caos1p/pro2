<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use App\Models\Horario;
use App\Models\Personal;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;

class PersonalController extends Controller
{ public function __construct()
	{
		$this->middleware('auth');
	} 
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {  $nombre=$request->get('buscarpaciente');
        $personal=Personal::where('ci','like','%'.$nombre .'%')->orderBy('id','asc')-> paginate(10);
        $personal->load('usuario');
        $personal->load('especialidad');
        $personal->load('horario');

        return view('administrador.personal.index',['personal'=>$personal]);



      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $personal=Personal::get();
        $rol=Rol::get();
        $especial=Especialidad::get();
        $horario=Horario::get();


      
        return view('administrador.personal.create',['personal'=>$personal,'rol'=>$rol,'horario'=>$horario,'especial'=>$especial]);       

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
        $usuario->tipo='medico';
        $usuario->rol_id=$request->input('rol_id');
        $usuario->password=bcrypt($request->input('contraseña'));
        $usuario->save();

        $paciente=new Personal();
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
        $paciente->tipo='medico';
        $paciente->usuario_id=   $usuario->id;
        $paciente->horario_id= $request->input('horario_id');;
        $paciente->especialidad_id= $request->input('especialidad_id');

        $paciente->save();
        return redirect()->route('personal.index');
    }
    public function edit($id)
    {   $idu=Personal::where('id', $id)->pluck('usuario_id')->first();
        $idh=Personal::where('id', $id)->pluck('horario_id')->first();
        $usuario=User::where('id',$idu)->get();

        $horario=Horario::where('id',$idh)->get();
        $personal=Personal::findOrFail($id);
        

        return view('administrador.personal.edit',['personal'=>$personal,'horario'=>$horario,'usuario'=>$usuario]);
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
        $cliente= persona::findOrFail($id);
        $cliente->nombre=$request->input('nombre');
        $cliente->apellido=$request->input('apellido');
        $cliente->ci=$request->input('ci');
        $cliente->direccion=$request->input('direccion');
        $cliente->telefono=$request->input('telefono');
        $cliente->email=$request->input('email');
        $cliente->tipo=2;
        $cliente->tipo_id=$request->input('tipo_id');
        $cliente->save();
        event(new editarcliente(  $cliente));

        return redirect()->route('cliente.index');
    }
    public function destroy($id)
    {
        $idu=Personal::where('id', $id)->pluck('usuario_id')->first();
        $persona=Personal::findOrFail($id);
        $user=User::findOrFail($idu);
        $persona->delete();
        $user->delete();
        return redirect()->route('personal.index')->with(['messages'=>'Se elimino correctamente']);
    }
    
    public function buscador(Request $request){
        $term=$request->get('term');
        $persona=Personal::where('ci','like','%'.$term .'%')->orderBy('ci','ASC')->select('ci as label')->get();
        return $persona;
        
    }


}

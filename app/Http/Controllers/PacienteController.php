<?php

namespace App\Http\Controllers;

use App\Events\citamedica as EventsCitamedica;
use App\Events\crearpaciente;
use App\Events\crearusuariopaciente;
use App\Models\Citamedica;
use App\Models\Especialidad;
use App\Models\Paciente;
use App\Models\Personal;
use App\Models\User;
use DateInterval;
use DatePeriod;
use DateTime;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use PhpParser\Node\Expr\Cast\String_;

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
        $paciente->load('citamedica');
        
        if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){
            return view('administrador.paciente.index',['paciente'=>$paciente]);

        }

            return view('usuario.paciente.index',['paciente'=>$paciente]);
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
        $especial=Personal::with('especialidad')->get();  
        $especial->load('horario');

  
            return view('paciente.paciente.create',['especial'=>$especial]);
        

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
        $usuario->rol_id=5;
        $usuario->password=bcrypt($request->input('contraseña'));
        $usuario->save();
        event(new crearusuariopaciente($usuario));


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
        event(new crearpaciente($paciente));

        $paciente->save();

        

        $cita=new Citamedica();
        $cita->title=$request->input('motivo');
        $cita->start=1;
        $cita->end=1;
        $cita->personal_id=$request->input('cita_id');
        $cita->paciente_id=$paciente->id;
        $cita->save();
        event(new EventsCitamedica($cita));



        $id= $cita->id;

        return redirect()->route('citamedica.create',[$id]);

    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createcita(Request $request , $id )
    {      
       

       // return $hora[0];
       $personal_id=Citamedica::where('id', $id)->pluck('personal_id')->first();
       $personal= Personal::findOrFail($personal_id);
       $personal->load('horario');
      // $idp=$personal->id;
      // return $fecha;

        $inicio = new DateTime( $personal->horario->horaentrada);
        $fin = new DateTime( $personal->horario->horadesalida);
        $intervalo = new DateInterval('PT30M');
        
        $fechas = new DatePeriod($inicio, $intervalo, $fin);
       
        
        $especial=Especialidad::with('personal')->get();
     // return response()->Json($fechas);
     $hora=$request->get('fecha');
     $fecha=null;

        if(  $hora){
            $fecha= Citamedica::where('start', $hora)->where('personal_id', $personal_id)->pluck('end');
            return view('paciente.citamedica.create',['fecha'=>$fecha,'hora'=>$hora,'id'=>$id,'especial'=>$especial,'fechas'=>$fechas]);

        }

        return view('paciente.citamedica.create',['fecha'=>$fecha,'hora'=>$hora,'id'=>$id,'especial'=>$especial,'fechas'=>$fechas]);
    }
    public function storecita(Request $request, $id)
    {   $personal_id=Citamedica::where('id', $id)->pluck('personal_id')->first();
        $fecha=$request->get('fecha1');
        $hora=$request->get('hora');
        $sihora=Citamedica::where('end', $hora)->where('start', $fecha)->where('personal_id', $personal_id)->pluck('id')->first();
        if( $sihora){
            return redirect()->route('citamedica.create',[$id])->with(['message'=>'No se pudo completar el registro esa hora ya esta ocupada  ']);
        }
        
        $agenda=Citamedica::findOrFail($id);
        $agenda->start= $fecha;
        $agenda->end=$request->input('hora');
        $agenda->save();

        return redirect()->route('pagarconpaypal');




    }

    public function buscador(Request $request){
        $term=$request->get('term');
        $persona=Paciente::where('ci','like','%'.$term .'%')->orderBy('ci','ASC')->select('ci as label')->get();
        return $persona;
        
    }


}

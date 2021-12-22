<?php

namespace App\Http\Controllers;

use App\Events\crearrol;
use App\Models\Personal;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class RolController extends Controller
{  public function __construct()
	{
		$this->middleware('auth');
	} 
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $roles=Rol::orderBy('id','asc')-> paginate(10);
        return view('administrador.rol.index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.rol.create');
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
        event(new crearrol($rol));

        return redirect()->route('rol.index');


    }
    public function edit($id)
    { 
        $rol=Rol::findOrFail($id);
        

        return view('administrador.rol.edit',['rol'=>$rol]);
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
        
            
            $idp=User::where('rol_id', $id)->pluck('id')->first();
            if($idp>0){
               
                return redirect()->route('rol.index')->with(['message'=>'No se puede eliminar por que otros registros dependen de este elemento ']);
        }
                $persona=Rol::findOrFail($id);
                $persona->delete();
                return redirect()->route('rol.index')->with(['messages'=>'Se elimino correctamente']);
            
  
    }
}

<?php

namespace App\Http\Controllers;

use App\Events\crearusuario;
use App\Events\editarusuario;
use App\Events\ediusuario;
use App\Events\eliminarusuario;
use App\Http\Requests\UsuarioRequest;
use App\Models\cargo;
use App\Models\persona;
use App\Models\Rol;
use App\Models\User;
use Carbon\Carbon;
use CreatePersonasTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexpaciente()
    {
        $errors=User:: where('tipo', 'paciente')-> orderBy('id','desc')-> paginate(10);
        return view('usuario.indexpaciente',['errors'=>$errors]);  
    }
    public function indexmedico()
    {   $errors=User:: where('tipo','<>', 'paciente')-> orderBy('id','desc')-> paginate(10);
       
        return view('usuario.indexmedico',['errors'=>$errors]);
     
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $rol=Rol::all();
        return view('usuario.create',['rol'=>$rol]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
       

        $users=new User();
        $users->name= $request->input('nombre');
        $users->email= $request->input('email');
        $users->tipo='medico';
        $users->password=bcrypt($request->input('password'));
        $users->save();
        return redirect()->route('/');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $personas=User::findOrFail($id);
        $personas->load('persona');
        return view('usuario.show',['personas'=>$personas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       /* $users=DB::table('users')
        ->where('id','=',$id)
        ->select('users.*')
        ->first();
        return view('usuario.edit',['users'=>$users]);;*/
        $personas=User::findOrFail($id);
        $rol=Rol::all();
        return view('usuario.edit',['personas'=>$personas,'rol'=>$rol]);
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
       /* $persona= persona::findOrFail($id);
        $persona->name=$request->input('name');
        $persona->apellido=$request->input('apellido');
        $persona->tipo_documento=$request->input('tipo_documento');
        $persona->N_documento=$request->input('N_docuemento');
        $persona->direccion=$request->input('direccion');
        $persona->telefono=$request->input('telefono');
        $persona->email=$request->input('email');

        $persona->tipo=1;
        $persona->save();*/

        $users=User::findOrFail($id);
        $users->name=$request->input('nombre');
        $users->email=$request->input('email');
        $users->tipo='personal';
        $users->password=bcrypt($request->input('password'));
        $users->rol_id=$request->input('rol_id');  
        $users->save();
        event(new editarusuario($users));
        return redirect()->route('usuarioindex',[$users->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona=User::findOrFail($id);
        $persona->delete();
        return redirect()->route('usuario.index');
    }
    public function enviar(UsuarioRequest $request)
    {
        return redirect()->route('usuarioindex');
    }
}

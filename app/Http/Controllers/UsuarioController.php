<?php

namespace App\Http\Controllers;

use App\Events\editarhorariodeatencion;
use App\Models\Horadetrabajo;
use App\Models\Paciente;
use App\Models\Personal;
use App\Models\Rol;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexpaciente()
    {
        $errors=User:: where('tipo', 'paciente')-> orderBy('id','asc')-> paginate(10);
        return view('administrador.usuario.indexpaciente',['errors'=>$errors]);  
    }
    public function indexmedico()
    {   $errors=User:: where('tipo','<>', 'paciente')-> orderBy('id','asc')-> paginate(10);
       
        return view('administrador.usuario.indexmedico',['errors'=>$errors]);
     
    }
    public function indexusuario()
    {   $email=auth()->user()->email;
        $id=auth()->user()->id;
         $usuario=User:: where('email', $email)->get();
         $persona=Personal:: where('usuario_id',   $id)->get();
         $usuario->load('rol');
        return view('usuario.usuario.indexusuario',['usuario'=>$usuario,'persona'=>$persona]);
     
    }
    public function indexadmin()
    {   $email=auth()->user()->email;
         $usuario=User:: where('email', $email)->get();
         $horario=Horadetrabajo::all();
         $usuario->load('rol');
        return view('administrador.usuario.indexadmin',['horario'=>$horario,'usuario'=>$usuario]);
     
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
        return view('administrador.usuario.show',['personas'=>$personas]);
    }
    public function edit($id)
    { 
        $usuario=User::findOrFail($id);
        

        return view('usuario.usuario.edit',['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    if (Auth::check() && Auth::user()->rol->nombre==='administrador' ){

         $users=User::findOrFail($id);
        $users->name= $request->input('name');
        $users->email=$request->input('email');
        $users->tipo='administrador';
        $users->rol_id=8;
        if($request->input('nuevopassword')){

            if($request->input('password')==$request->input('nuevopassword')){
                $users->password=bcrypt($request->input('password'));
                $users->save();
                return redirect()->route('usuario.indexadmin')->with(['message'=>'Los datos se guardaron correctamente ']);
    
            }  else{
                return redirect()->route('usuario.indexadmin')->with(['messages'=>'Error no realizo los cambios. Las contraseñas no coinciden intentelo de nuevo ']);
    
            }
    
         }else{
            $users->password=bcrypt($request->input('password'));
            $users->save();
            return redirect()->route('usuario.indexadmin')->with(['message'=>'Los datos se guardaron correctamente ']);
         }
        }else{
        $users=User::findOrFail($id);
        $users->name= $request->input('name');
        $users->email=$request->input('email');
        $users->tipo='medico';
        $users->rol_id=2;
        if($request->input('nuevopassword')){

            if($request->input('password')==$request->input('nuevopassword')){
                $users->password=bcrypt($request->input('password'));
                $users->save();
                return redirect()->route('usuario.indexusuario')->with(['message'=>'Los datos se guardaron correctamente ']);
    
            }  else{
                return redirect()->route('usuario.indexusuario')->with(['messages'=>'Error no realizo los cambios. Las contraseñas no coinciden intentelo de nuevo ']);
    
            }
    
         }else{
            $users->password=bcrypt($request->input('password'));
            $users->save();
            return redirect()->route('usuario.indexusuario')->with(['message'=>'Los datos se guardaron correctamente ']);
         }
     
        }
    }
    public function updatepaciente(Request $request, $id)
    {
        $users=User::findOrFail($id);
        $users->name= $request->input('name');
        $users->email=$request->input('email');
        $users->tipo='paciente';
        $users->rol_id=5;
        if($request->input('nuevopassword')){

        if($request->input('password')==$request->input('nuevopassword')){
            $users->password=bcrypt($request->input('password'));
            $users->save();
            return redirect()->route('citamedica.vistadecita')->with(['message'=>'Los datos se guardaron correctamente ']);

        }  else{
            return redirect()->route('citamedica.vistadecita')->with(['messages'=>'Error no realizo los cambios. Las contraseñas no coinciden intentelo de nuevo ']);

        }

     }else{
        $users->password=bcrypt($request->input('password'));
        $users->save();
        return redirect()->route('citamedica.vistadecita')->with(['message'=>'Los datos se guardaron correctamente ']);
     }
    }

     public function storehora(Request $request)
     {
         $hora=new Horadetrabajo();
         $hora->horainicio=$request->get('horadeentrada');
         $hora->horafin=$request->get('horadesalida');
         $hora->save();
         return redirect()->route('usuario.indexadmin')->with(['message'=>'Los datos se guardaron correctamente ']); 
 
     }
     public function updatehora(Request $request, $id)
     {
         $horario= Horadetrabajo::findOrFail($id);
         $horario->horainicio=$request->get('horainicio');
         $horario->horafin=$request->get('horafin');
         $horario->save();
         event(new editarhorariodeatencion(  $horario));

         return redirect()->route('usuario.indexadmin')->with(['message'=>'Los datos se guardaron correctamente ']); 
     }
 
    
    }




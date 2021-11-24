<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Paciente;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\refresh;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiloginController extends Controller
{  /**
    * Create a new AuthController instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth:api', ['except' => ['login1','register','registropaciente']]);
   }

   /**
    * Get a JWT token via given credentials.
    *
    * @param  \Illuminate\Http\Request  $request
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function login()
   {

    return view('auth.login');
   }


   public function login1(Request $request)
   {
       $input=$request->only('email','password');
       $token=null;
       if( !$token=JWTAuth::attempt($input)){
           return response()->json([
               'success' => false,
               'mensaje' => 'credenciales incorrectas',
            ], 401);
       }
       $user=Auth::user();
       return response()->json([
        'success' => true,
        'user' =>$user ,
        'mensaje' => 'credenciales correctas',
        'token' =>$token ,
     ], 200);
   }

   /**
    * Get the authenticated User
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function me()
   {
       return response()->json($this->guard()->user());
   }

   /**
    * Log the user out (Invalidate the token)
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function logout()
   {
       $this->guard()->logout();

       return response()->json(['message' => 'Successfully logged out']);
   }

   /**
    * Refresh a token.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function refresh()
   {
       return $this->respondWithToken($this->guard()->refresh());
   }

   /**
    * Get the token array structure.
    *
    * @param  string $token
    *
    * @return \Illuminate\Http\JsonResponse
    */
   protected function respondWithToken($token)
   {
       return response()->json([
           'access_token' => $token,
           'token_type' => 'bearer',
           'expires_in' => $this->guard()->factory()->getTTL() * 60
       ]);
   }

   /**
    * Get the guard to be used during authentication.
    *
    * @return \Illuminate\Contracts\Auth\Guard
    */
   public function guard()
   {
       return Auth::guard();
   }
   public function register(Request $request)
   {
       $validator=Validator::make($request->all(),[
         'nombre'=>'required',
       ]);
     

    if ($validator->fails()){

        return response()->json($validator->errors()->toJson(),400);
    }
 
    $rol=Rol::create(array_merge(
        $validator->validate(),
    ));
 
    return response()->json([
      
        'messaje' =>'usuario registrado' ,
        'user' =>$rol ,
       
     ], 201);  
    }

    public function registropaciente(Request $request)
    {
        $usuario=Validator::make($request->all(),[
      
          'email'=>'required',
          'password'=>'required',
        
         
        ]);
        $paciente=Validator::make($request->all(),[
      
            'nombre'=>'required',
            'apellidopaterno'=>'required',
            'apellidomaterno'=>'required',
            'ci'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'pais'=>'required',
            'fechadenacimiento'=>'required',
            'email'=>'required',
            'genero'=>'required',
     
          ]);
 
      
 
     if ($usuario->fails()){
 
         return response()->json($usuario->errors()->toJson(),400);
     }
     if ($paciente->fails()){
 
        return response()->json($paciente->errors()->toJson(),400);
    }
    $datosusuario=[
      'name'=>$request->nombre,
      'email'=>$request->email,
      'password'=>bcrypt($request->password),
      'tipo'=>'paciente',
      'rol_id'=>21,
    ];
    $user=User::create($datosusuario);
    $datospaciente=[
        'nombre'=>$request->nombre,
        'apellidopaterno'=>$request->apellidopaterno,
        'apellidomaterno'=>$request->apellidomaterno,
        'ci'=>$request->ci,
        'telefono'=>$request->telefono,
        'direccion'=>$request->direccion,
        'email'=>$request->email,
        'fechadenacimiento'=>$request->fechadenacimiento,
        'genero'=>$request->genero,
        'pais'=>$request->pais,
        'usuario_id'=>$user->id,
      ];
      $pacient=Paciente::create($datospaciente);
   
  
  
     return response()->json([
       
         'messaje' =>'usuario registrado' ,
         'user' =>$user ,
         'paciente' =>$pacient ,
  
        
      ], 201);  
     }
     public function registrohorario(Request $request)
     {
         $usuario=Validator::make($request->all(),[
       
           'title'=>'required',
           'start'=>'required',
           'end'=>'required',
         
          
         ]);
        
      if ($usuario->fails()){
  
          return response()->json($usuario->errors()->toJson(),400);
      }
     $datosusuario=[
       'name'=>$request->nombre,
       'email'=>$request->email,
       'password'=>bcrypt($request->password),
       'tipo'=>'paciente',
       'rol_id'=>21,
     ];
     $user=User::create($datosusuario);

      return response()->json([
        
          'messaje' =>'usuario registrado' ,
          'user' =>$user ,
         
   
         
       ], 201);  
      }
}


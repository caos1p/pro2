<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    public function index(Request $request)
    {  $nombre=$request->get('buscarpaciente');
        $bitacora=Bitacora::where('fecha','like','%'.$nombre .'%')->orderBy('id','desc')-> paginate(10);

        return view('administrador.bitacora.index',['bitacora'=>$bitacora]);
    }
    public function buscador(Request $request){
        $term=$request->get('term');
        $persona=Bitacora::where('fecha','like','%'.$term .'%')->orderBy('id','ASC')->select('fecha as label')->get();
        return $persona;
        
    }
}

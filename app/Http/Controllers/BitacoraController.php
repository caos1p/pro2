<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    public function index()
    {
        $bitacora=Bitacora::orderBy('id','desc')-> paginate(10) ;

        return view('administrador.bitacora.index',['bitacora'=>$bitacora]);
    }
}

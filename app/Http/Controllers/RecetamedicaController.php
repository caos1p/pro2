<?php

namespace App\Http\Controllers;

use App\Models\Recetamedica;
use Illuminate\Http\Request;

class RecetamedicaController extends Controller
{
    public function store(Request $request)
    {
        $recetamedica=new Recetamedica();
        $recetamedica->nombre=$request->input('nombre');
        $recetamedica->descripcion=$request->input('descripcion');
        $recetamedica->save();
        return redirect()->route('rol.index');


    }
}

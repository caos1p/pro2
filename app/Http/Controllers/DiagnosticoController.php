<?php

namespace App\Http\Controllers;

use App\Models\Diagnostico;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DiagnosticoController extends Controller
{
   

    public function store(Request $request)
    {  $id=$request->get('id');
      

        $diagnostic=new Diagnostico();
        $diagnostic->diagnostico=$request->input('enfermedad');
        $diagnostic->paciente_id=$id;

        $diagnostic->save();
        return redirect()->route('historial.showdiagnostico',[$id]);


    }
}

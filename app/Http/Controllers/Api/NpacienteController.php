<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Paciente;
use Illuminate\Http\Request;

class NpacienteController extends Controller
{
    
    public function index()
    {
        $paciente=Paciente::all();
        return response()->json($paciente);
    }
}

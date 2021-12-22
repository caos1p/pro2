<?php

namespace App\Http\Controllers;

use App\Models\Horadetrabajo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $horario=Horadetrabajo::all();
        return view('home',['horario'=>$horario]);
    }
}

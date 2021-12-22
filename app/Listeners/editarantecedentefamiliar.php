<?php

namespace App\Listeners;

use App\Events\editarantecedentefamiliar as EventsEditarantecedentefamiliar;
use App\Models\Bitacora;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class editarantecedentefamiliar
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EventsEditarantecedentefamiliar $event)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
         $bitacora=new Bitacora();
         $bitacora->usuario=auth()->user()->email;
         $bitacora->accion='editar antecedentes familiares';
         $bitacora->fecha=$date;
         $bitacora->save();
    }
}

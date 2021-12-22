<?php

namespace App\Listeners;

use App\Events\subirdocumento as EventsSubirdocumento;
use App\Models\Bitacora;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class subirdocumento
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
    public function handle(EventsSubirdocumento $event)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
         $bitacora=new Bitacora();
         $bitacora->usuario=auth()->user()->email;
         $bitacora->accion='subir archivo ala base de datos';
         $bitacora->fecha=$date;
         $bitacora->save();
    }
}

<?php

namespace App\Listeners;

use App\Events\citamedica as EventsCitamedica;
use Carbon\Carbon;
use App\Models\Bitacora;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class citamedica
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
    public function handle(EventsCitamedica $event)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
         $bitacora=new Bitacora();
         $bitacora->usuario=$event->email;
         $bitacora->accion='crear cita medica';
         $bitacora->fecha=$date;
         $bitacora->save();
    }
}

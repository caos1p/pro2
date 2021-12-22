<?php

namespace App\Listeners;

use App\Events\logout as EventsLogout;
use App\Models\Bitacora;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class logout
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
    public function handle(EventsLogout $event)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
         $bitacora=new Bitacora();
         $bitacora->usuario=session()->getId();
         $bitacora->accion='cerrar  sesion';
         $bitacora->fecha=$date;
         $bitacora->save();
    }
}

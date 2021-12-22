<?php

namespace App\Listeners;

use App\Events\crearrol as EventsCrearrol;
use App\Models\Bitacora;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class crearrol
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
    public function handle(EventsCrearrol $event)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
         $bitacora=new Bitacora();
         $bitacora->usuario=auth()->user()->email;
         $bitacora->accion='crear rol';
         $bitacora->fecha=$date;
         $bitacora->save();
    }
}

<?php

namespace App\Listeners;

use App\Events\exportarapdf as EventsExportarapdf;
use App\Models\Bitacora;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class exportarapdf
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
    public function handle(EventsExportarapdf $event)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
         $bitacora=new Bitacora();
         $bitacora->usuario=auth()->user()->email;
         $bitacora->accion='exportar a pdf la receta medica';
         $bitacora->fecha=$date;
         $bitacora->save();
    }
}

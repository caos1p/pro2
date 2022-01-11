<?php

namespace App\Listeners;

use App\Events\crearpaciente as EventsCrearpaciente;
use Carbon\Carbon;
use App\Models\Bitacora;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class crearpaciente
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
    public function handle(EventsCrearpaciente $event)
    {      
               $date = Carbon::now();
       $date = $date->format('Y-m-d');
        $bitacora=new Bitacora();
        $bitacora->usuario= 'paciente' ;
        $bitacora->accion='crear Paciente';
        $bitacora->fecha=$date;
        $bitacora->save();
    }
}

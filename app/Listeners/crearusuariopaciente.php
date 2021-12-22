<?php

namespace App\Listeners;

use App\Events\crearusuariopaciente as EventsCrearusuariopaciente;
use Carbon\Carbon;
use App\Models\Bitacora;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class crearusuariopaciente
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
    public function handle(EventsCrearusuariopaciente $event)
    {         $email=$event->email;

        $date = Carbon::now();
        $date = $date->format('Y-m-d');
        $bitacora=new Bitacora();
        $bitacora->usuario=$email;
        $bitacora->accion='crear usuario rol paciente';
        $bitacora->fecha=$date;
        $bitacora->save();
    }
}

<?php

namespace App\Listeners;

use App\Events\editarantecedentepersonal as EventsEditarantecedentepersonal;
use App\Models\Bitacora;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class editarantecedentepersonal
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
    public function handle(EventsEditarantecedentepersonal $event)
    {
        $date = Carbon::now();
        $date = $date->format('Y-m-d');
         $bitacora=new Bitacora();
         $bitacora->usuario=auth()->user()->email;
         $bitacora->accion='editar antedente personal';
         $bitacora->fecha=$date;
         $bitacora->save();
    }
}

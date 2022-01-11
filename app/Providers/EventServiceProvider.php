<?php

namespace App\Providers;

use App\Events\citamedica;
use App\Events\crearantecedentesfamiliares;
use App\Events\crearantecedentespersonales;
use App\Events\creardiagnostico;
use App\Events\crearpaciente;
use App\Events\crearreceta;
use App\Events\crearrol;
use App\Events\crearusuariopaciente;
use App\Events\editarantecedentefamiliar;
use App\Events\editarantecedentepersonal;
use App\Events\editarhorariodeatencion;
use App\Events\enviarrecetaagmail;
use App\Events\exportarapdf;
use App\Events\login;
use App\Events\logout;
use App\Events\pago;
use App\Events\subirdocumento;
use App\Listeners\citamedica as ListenersCitamedica;
use App\Listeners\crearantecedentesfamiliares as ListenersCrearantecedentesfamiliares;
use App\Listeners\crearantecedentespersonales as ListenersCrearantecedentespersonales;
use App\Listeners\creardiagnostico as ListenersCreardiagnostico;
use App\Listeners\crearpaciente as ListenersCrearpaciente;
use App\Listeners\crearreceta as ListenersCrearreceta;
use App\Listeners\crearrol as ListenersCrearrol;
use App\Listeners\crearusuariopaciente as ListenersCrearusuariopaciente;
use App\Listeners\editarantecedentefamiliar as ListenersEditarantecedentefamiliar;
use App\Listeners\editarantecedentepersonal as ListenersEditarantecedentepersonal;
use App\Listeners\editarhorariodeatencion as ListenersEditarhorariodeatencion;
use App\Listeners\enviarrecetaagmail as ListenersEnviarrecetaagmail;
use App\Listeners\exportarapdf as ListenersExportarapdf;
use App\Listeners\login as ListenersLogin;
use App\Listeners\logout as ListenersLogout;
use App\Listeners\pago as ListenersPago;
use App\Listeners\subirdocumento as ListenersSubirdocumento;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        crearrol::class => [
            ListenersCrearrol::class,
        ],
        crearpaciente::class => [
            ListenersCrearpaciente::class,
        ],
        citamedica::class => [
            ListenersCitamedica::class,
        ],
        crearreceta::class => [
            ListenersCrearreceta::class,
        ],
        crearusuariopaciente::class => [
            ListenersCrearusuariopaciente::class,
        ],
        creardiagnostico::class => [
            ListenersCreardiagnostico::class,
        ],
        subirdocumento::class => [
            ListenersSubirdocumento::class,
        ],
        crearantecedentesfamiliares::class => [
            ListenersCrearantecedentesfamiliares::class,
        ],
        crearantecedentespersonales::class => [
            ListenersCrearantecedentespersonales::class,
        ],
        editarhorariodeatencion::class => [
            ListenersEditarhorariodeatencion::class,
        ],
        editarantecedentefamiliar::class => [
            ListenersEditarantecedentefamiliar::class,
        ],
        editarantecedentepersonal::class => [
            ListenersEditarantecedentepersonal::class,
        ],
        exportarapdf::class => [
            ListenersExportarapdf::class,
        ],
        enviarrecetaagmail::class => [
            ListenersEnviarrecetaagmail::class,
        ],
        login::class => [
            ListenersLogin::class,
        ],
        logout::class => [
            ListenersLogout::class,
        ],
        pago::class => [
            ListenersPago::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
      //
    }
}

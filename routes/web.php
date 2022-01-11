<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AntecedenteController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\CitamedicaController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ImprimirController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\RecetamedicaController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Models\Citamedica;
use App\Models\Recetamedica;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])-> name('home.create');

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')-> name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')-> name('login');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->middleware('auth');

Route::get('/paciente/create', [PacienteController::class, 'create'])-> name('paciente.create');
Route::get('/citamedica/{id}', [PacienteController::class, 'createcita'])-> name('citamedica.create');
Route::post('/citamedica/{id}', [PacienteController::class, 'storecita'])-> name('citamedica.store');
Route::post('/paciente', [PacienteController::class, 'store'])-> name('paciente.store');

Route::get('/paypal/pay', [PaymentController::class, 'pagarconpaypal'])-> name('pagarconpaypal');
Route::get('/paypal/status', [PaymentController::class, 'paypalstatus'])-> name('paypalstatus');



Route::group([' middleware' => ['auth:admin']], function () {
    Route::prefix('/admin')->group(function () {


      Route::get('/usuario', [UsuarioController::class, 'indexpaciente'])-> name('usuario.indexpaciente');
      Route::get('/usuario/medico', [UsuarioController::class, 'indexmedico'])-> name('usuario.indexmedico');
      Route::get('/usuario/configuracion', [UsuarioController::class, 'indexadmin'])-> name('usuario.indexadmin');
      Route::get('/usuario/create', [UsuarioController::class, 'create'])-> name('usuario.create');
      Route::post('/usuario', [UsuarioController::class, 'store'])-> name('usuario.store');
      Route::get('/usuario/{id}', [UsuarioController::class, 'show'])-> name('usuario.show');
      Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])-> name('usuario.edit');
      Route::put('/usuario/{id}', [UsuarioController::class, 'update'])-> name('usuario.update');
      Route::get('/usuario/{id}/destroy', [UsuarioController::class, 'destroy'])-> name('usuario.destroy');
      Route::post('/usuario/hora', [UsuarioController::class, 'storehora'])-> name('usuariohora.store');
      Route::put('/usuario/{id}/hora', [UsuarioController::class, 'updatehora'])-> name('usuariohora.update');

      Route::get('/bitacora', [BitacoraController::class, 'index'])-> name('bitacora.index');
      Route::get('/buscador.bitacora', [BitacoraController::class, 'buscador'])-> name('buscador.bitacora');


      Route::get('/reporte', [ReporteController::class, 'index'])-> name('reporte.index');
      Route::get('/reporte1', [ReporteController::class, 'index1'])-> name('reporte.index1');
      Route::get('/reporte2', [ReporteController::class, 'index2'])-> name('reporte.index2');
      Route::get('/imprimirreporte/{fechaini}/fecha/{fechafi}', [imprimirController::class, 'imprimirreporte'])-> name('imprimirreporte');
      Route::get('/imprimirreporte1/{fechaini}/fecha/{fechafi}', [imprimirController::class, 'imprimirreporte1'])-> name('imprimirreporte1');




     Route::get('/historial/interrogatorio/{id}', [HistorialController::class, 'showinterrogatorio'])-> name('historial.showinterrogatorio');
     Route::get('/historial/diagnostico/{id}', [HistorialController::class, 'showdiagnostico'])-> name('historial.showdiagnostico');
     Route::get('/historial/archivo/{id}', [HistorialController::class, 'showarchivo'])-> name('historial.showarchivo');

     Route::get('/diagnostico', [DiagnosticoController::class, 'index'])-> name('diagnostico.index');
     Route::post('/diagnostico', [DiagnosticoController::class, 'store'])-> name('diagnostico.store');

     Route::post('/recetamedica', [Recetamedica::class, 'store'])-> name('recetamedica.store');

     Route::get('/paciente', [PacienteController::class, 'index'])-> name('paciente.index')->middleware('auth');
     Route::get('/buscador.paciente', [PacienteController::class, 'buscador'])-> name('buscador.paciente')->middleware('auth');

     Route::get('/personal', [PersonalController::class, 'index'])-> name('personal.index');
     Route::get('/personal/create', [PersonalController::class, 'create'])-> name('personal.create');
     Route::post('/personal', [PersonalController::class, 'store'])-> name('personal.store');
     Route::get('/personal/{id}', [PersonalController::class, 'show'])-> name('personal.show');
     Route::get('/personal/{id}/edit', [PersonalController::class, 'edit'])-> name('personal.edit');
     Route::put('/personal/{id}', [PersonalController::class, 'update'])-> name('personal.update');
     Route::get('/personal/{id}/destroy', [PersonalController::class, 'destroy'])-> name('personal.destroy');
     Route::get('/buscador.personal', [PersonalController::class, 'buscador'])-> name('buscador.personal');



     Route::get('/rol', [RolController::class, 'index'])-> name('rol.index');
     Route::get('/rol/create', [RolController::class, 'create'])-> name('rol.create');
     Route::post('/rol', [RolController::class, 'store'])-> name('rol.store');
     Route::get('/rol/{id}/edit', [RolController::class, 'edit'])-> name('rol.edit');
     Route::put('/rol/{id}', [RolController::class, 'update'])-> name('rol.update');
     Route::get('/rol/{id}/destroy', [RolController::class, 'destroy'])-> name('rol.destroy');

     Route::get('/citamedica', [CitamedicaController::class, 'index'])-> name('citamedica.index');
     Route::get('/citamedica/{id}/destroy', [CitamedicaController::class, 'destroy'])-> name('citamedica.destroy');

     Route::get('/horario', [HorarioController::class, 'index'])-> name('horario.index');
     Route::get('/horario/create', [HorarioController::class, 'create'])-> name('horario.create');
     Route::post('/horario', [HorarioController::class, 'store'])-> name('horario.store');
     Route::get('/horario/{id}/edit', [HorarioController::class, 'edit'])-> name('horario.edit');
     Route::put('/horario/{id}', [HorarioController::class, 'update'])-> name('horario.update');
     Route::get('/horario/{id}/destroy', [HorarioController::class, 'destroy'])-> name('horario.destroy');

     Route::get('/especialidad', [EspecialidadController::class, 'index'])-> name('especialidad.index');
     Route::get('/especialidad/create', [EspecialidadController::class, 'create'])-> name('especialidad.create');
     Route::post('/especialidad', [EspecialidadController::class, 'store'])-> name('especialidad.store');
     Route::get('/especialidad/{id}/edit', [EspecialidadController::class, 'edit'])-> name('especialidad.edit');
     Route::put('/especialidad/{id}', [EspecialidadController::class, 'update'])-> name('especialidad.update');
     Route::get('/especialidad/{id}/destroy', [EspecialidadController::class, 'destroy'])-> name('especialidad.destroy');

     Route::get('/agenda', [AgendaController::class, 'index'])-> name('agenda.index');
     Route::get('/agenda/create', [AgendaController::class, 'create'])-> name('agenda.create');
     Route::get('/agenda/reunion', [AgendaController::class, 'reunion'])-> name('agenda.reunion');
     Route::post('/agenda', [AgendaController::class, 'store'])-> name('agenda.store');
     Route::get('/agenda/show', [AgendaController::class, 'show'])-> name('agenda.show');
     Route::get('/agenda/edit/{id}', [AgendaController::class, 'edit'])-> name('agenda.edit');
    });
});

Route::group([' middleware' => ['auth:medico']], function () {
    Route::prefix('/medico')->group(function () {


    Route::get('/usuario/medico', [UsuarioController::class, 'indexusuario'])-> name('usuario.indexusuario');
    Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])-> name('usuario.edit');
    Route::put('/usuario/{id}', [UsuarioController::class, 'update'])-> name('usuario.update');
    Route::put('/usuario/{id}/paciente', [UsuarioController::class, 'updatepaciente'])-> name('usuario.updatepaciente');


   Route::get('/historial/interrogatorio/{id}', [HistorialController::class, 'showinterrogatorio'])-> name('historial.showinterrogatorio');
   Route::get('/historial/interrogatorio1/{id}', [HistorialController::class, 'showinterrogatorio1'])-> name('historial.showinterrogatorio1');
   Route::get('/historial/diagnostico/{id}', [HistorialController::class, 'showdiagnostico'])-> name('historial.showdiagnostico');
   Route::get('/historial/archivo/{id}', [HistorialController::class, 'showarchivo'])-> name('historial.showarchivo');

   Route::get('/diagnostico', [DiagnosticoController::class, 'index'])-> name('diagnostico.index');
   Route::post('/diagnostico', [DiagnosticoController::class, 'store'])-> name('diagnostico.store');

   Route::post('/recetamedica', [RecetamedicaController::class, 'store'])-> name('recetamedica.store');
   Route::get('/recetamedica/index', [RecetamedicaController::class, 'index'])-> name('recetamedica.index');
   Route::get('/imprimir/{id}', [ImprimirController::class, 'imprimirreceta'])-> name('imprimirreceta');
   Route::get('/enviaremailreceta/{id}', [ImprimirController::class, 'enviaremailreceta'])-> name('enviaremailreceta');



   Route::get('/paciente', [PacienteController::class, 'index'])-> name('paciente.index')->middleware('auth');
   Route::get('/buscador.paciente', [PacienteController::class, 'buscador'])-> name('buscador.paciente')->middleware('auth');

   Route::get('/citamedica', [CitamedicaController::class, 'index'])-> name('citamedica.index');
   Route::get('/citamedica/hoy', [CitamedicaController::class, 'hoy'])-> name('citamedica.hoy');
   Route::get('/citamedica/buscarsemana', [CitamedicaController::class, 'buscarsemana'])-> name('citamedica.buscarsemana');
   Route::get('/citamedica/buscarmes', [CitamedicaController::class, 'buscarmes'])-> name('citamedica.buscarmes');
   Route::get('/citamedica/todos', [CitamedicaController::class, 'todos'])-> name('citamedica.todos');
   Route::get('/citamedica/{id}/destroy', [CitamedicaController::class, 'destroy'])-> name('citamedica.destroy');
   Route::get('/citamedica/{id}/cita', [CitamedicaController::class, 'citadepersonal'])-> name('citamedica.citadepersonal');




   

   Route::get('/agenda', [AgendaController::class, 'index'])-> name('agenda.index');
   Route::get('/agenda/create', [AgendaController::class, 'create'])-> name('agenda.create');
   Route::get('/agenda/reunion', [AgendaController::class, 'reunion'])-> name('agenda.reunion');
   Route::post('/agenda', [AgendaController::class, 'store'])-> name('agenda.store');
   Route::get('/agenda/show', [AgendaController::class, 'show'])-> name('agenda.show');
   Route::get('/agenda/edit/{id}', [AgendaController::class, 'edit'])-> name('agenda.edit');

   Route::get('/antecedente/create/{id}', [AntecedenteController::class, 'create'])-> name('antecedente.create');
   Route::get('/antecedente/show/{id}', [AntecedenteController::class, 'show'])-> name('antecedente.show');
   Route::get('/antecedente/{id}/edit', [AntecedenteController::class, 'edit'])-> name('antecedente.edit');
   Route::put('/antecedente/update', [AntecedenteController::class, 'update'])-> name('antecedente.update');
   Route::post('/antecedente', [AntecedenteController::class, 'store'])-> name('antecedente.store');


  });
});


    Route::group([' middleware' => ['auth:paciente']], function () {
        Route::prefix('/paciente')->group(function () {

    Route::post('/archivo', [ArchivoController::class, 'store'])-> name('archivo.store');

    Route::get('/vistadecita', [CitamedicaController::class, 'vistadecita'])-> name('citamedica.vistadecita');

  });
});

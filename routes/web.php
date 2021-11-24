<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CitamedicaController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\HistorialController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PersonalController;
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
Route::get('cita', function () {
    return view('cita');
});
Route::get('medico', function () {
    return view('medico');
});
Route::post('upload', function () {
    return view('upload');
});

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')-> name('login1');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')-> name('login');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');




Route::get('/usuario', [UsuarioController::class, 'indexpaciente'])-> name('usuario.indexpaciente');
Route::get('/usuario/medico', [UsuarioController::class, 'indexmedico'])-> name('usuario.indexmedico');
Route::get('/usuario/create', [UsuarioController::class, 'create'])-> name('usuario.create');
Route::post('/usuario', [UsuarioController::class, 'store'])-> name('usuario.store');
Route::get('/usuario/{id}', [UsuarioController::class, 'show'])-> name('usuario.show');
Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])-> name('usuario.edit');
Route::put('/usuario/{id}', [UsuarioController::class, 'update'])-> name('usuario.update');
Route::get('/usuario/{id}/destroy', [UsuarioController::class, 'destroy'])-> name('usuario.destroy');

Route::get('/historial/interrogatorio/{id}', [HistorialController::class, 'showinterrogatorio'])-> name('historial.showinterrogatorio');
Route::get('/historial/diagnostico/{id}', [HistorialController::class, 'showdiagnostico'])-> name('historial.showdiagnostico');
Route::get('/historial/archivo/{id}', [HistorialController::class, 'showarchivo'])-> name('historial.showarchivo');

Route::get('/diagnostico', [DiagnosticoController::class, 'index'])-> name('diagnostico.index');
Route::post('/diagnostico', [DiagnosticoController::class, 'store'])-> name('diagnostico.store');

Route::post('/recetamedica', [Recetamedica::class, 'store'])-> name('recetamedica.store');




Route::get('/paciente', [PacienteController::class, 'index'])-> name('paciente.index');
Route::get('/paciente/create', [PacienteController::class, 'create'])-> name('paciente.create');
Route::get('/citamedica/{id}', [PacienteController::class, 'createcita'])-> name('citamedica.create');
Route::post('/citamedica/{id}', [PacienteController::class, 'storecita'])-> name('citamedica.store');
Route::post('/paciente', [PacienteController::class, 'store'])-> name('paciente.store');
Route::get('/buscador.paciente', [PacienteController::class, 'buscador'])-> name('buscador.paciente');

Route::get('/personal', [PersonalController::class, 'index'])-> name('personal.index');
Route::get('/personal/create', [PersonalController::class, 'create'])-> name('personal.create');
Route::post('/personal', [PersonalController::class, 'store'])-> name('personal.store');
Route::get('/personal/{id}/edit', [PersonalController::class, 'edit'])-> name('personal.edit');
Route::put('/personal/{id}', [PersonalController::class, 'update'])-> name('personal.update');
Route::get('/personal/{id}/destroy', [PersonalController::class, 'destroy'])-> name('personal.destroy');


Route::get('/rol', [RolController::class, 'index'])-> name('rol.index');
Route::get('/rol/create', [RolController::class, 'create'])-> name('rol.create');
Route::post('/rol', [RolController::class, 'store'])-> name('rol.store');
Route::get('/rol/{id}/edit', [RolController::class, 'edit'])-> name('rol.edit');
Route::put('/rol/{id}', [RolController::class, 'update'])-> name('rol.update');
Route::get('/rol/{id}/destroy', [RolController::class, 'destroy'])-> name('rol.destroy');

Route::get('/citamedica', [CitamedicaController::class, 'index'])-> name('citamedica.index');
Route::get('/citamedica/{id}/destroy', [CitamedicaController::class, 'destroy'])-> name('citamedica.destroy');
Route::get('/vistadecita', [CitamedicaController::class, 'vistadecita'])-> name('citamedica.vistadecita');

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

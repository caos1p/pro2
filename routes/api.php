<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NpacienteController;
use App\Http\Controllers\ApiloginController;
use App\Models\Paciente;
use App\Models\Rol;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', [ApiloginController::class, 'login'])-> name('login');
    Route::post('login1', [ApiloginController::class, 'login1'])-> name('login1');
    Route::post('logout', [ApiloginController::class, 'logout'])-> name('logout');
    Route::post('refresh', [ApiloginController::class, 'refresh'])-> name('refresh');
    Route::post('me', [ApiloginController::class, 'me'])-> name('me');
    Route::post('register', [ApiloginController::class, 'register'])-> name('register');
    Route::post('registropaciente', [ApiloginController::class, 'registropaciente'])-> name('registropaciente');
    Route::post('registrocita', [ApiloginController::class, 'registrocita'])-> name('registrocita');



});
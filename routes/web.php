<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')-> name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')-> name('login');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');


Route::get('/usuario', [UsuarioController::class, 'index'])-> name('usuario.index');
Route::get('/usuario/create', [UsuarioController::class, 'create'])-> name('usuario.create');
Route::post('/usuario', [UsuarioController::class, 'store'])-> name('usuario.store');
Route::get('/usuario/{id}', [UsuarioController::class, 'show'])-> name('usuario.show');
Route::get('/usuario/{id}/edit', [UsuarioController::class, 'edit'])-> name('usuario.edit');
Route::put('/usuario/{id}', [UsuarioController::class, 'update'])-> name('usuario.update');
Route::get('/usuario/{id}/destroy', [UsuarioController::class, 'destroy'])-> name('usuario.destroy');
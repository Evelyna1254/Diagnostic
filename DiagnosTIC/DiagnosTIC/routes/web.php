<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('agenda', App\Http\Controllers\AgendaController::class);
Route::resource('persona', App\Http\Controllers\PersonaController::class);
Route::resource('receta', App\Http\Controllers\RecetaController::class);
Route::resource('antecedente', App\Http\Controllers\AntecedenteController::class);
Route::resource('consulta', App\Http\Controllers\ConsultaController::class);
Route::get('persona/index/{tipo}', 'App\Http\Controllers\PersonaController@index');
Route::get('persona/create/{tipo}', 'App\Http\Controllers\PersonaController@create');

// Route::resource('agenda', 'AgendaController');

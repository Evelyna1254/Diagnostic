<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('persona/ConsultarProfesionales', 'App\Http\Controllers\PersonaController@ConsultarProfesionales');
Route::get('persona/ConsultarPacientes', 'App\Http\Controllers\PersonaController@ConsultarPacientes');
Route::get('agenda/ConsultarAgendas', 'App\Http\Controllers\AgendaController@ConsultarAgendas');
Route::get('antecedente/ConsultarAntecedentes', 'App\Http\Controllers\AntecedenteController@ConsultarAntecedentes');


<?php

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

Route::resource('usuario', 'ecadUsuariosController');
Route::post('usuario/grava', 'ecadUsuariosController@store');
Route::resource('medicamento', 'ecadMedicamentoController');
Route::post('medicamento/grava', 'ecadMedicamentoController@store');
Route::resource('bucamedicamento', 'buscaController');
Route::post('bucamedicamento/result', 'buscaController@show');
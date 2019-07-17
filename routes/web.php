<?php

use App\ClienteController;
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

//Cliente
Route::get('/cliente', 'ClienteController@index')->name('cliente.index');
Route::get('/cliente/cadastrar', 'ClienteController@cadastrar')->name('cliente.cadastrar');
Route::post('/cliente/salvar', 'ClienteController@salvar')->name('cliente.salvar');
Route::get('/cliente/deletar/{id}', 'ClienteController@deletar')->name('cliente.deletar');
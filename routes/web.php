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
Route::get('/cliente/editar/{id}', 'ClienteController@editar')->name('cliente.editar');
Route::post('/cliente/atualizar/{id}', 'ClienteController@atualizar')->name('cliente.atualizar');


//Pet
Route::get('/pet', 'PetController@index')->name('pet.index');
Route::get('/pet/cadastrar', 'PetController@cadastrar')->name('pet.cadastrar');
Route::post('/pet/salvar', 'PetController@salvar')->name('pet.salvar');
Route::get('/pet/deletar/{id}', 'PetController@deletar')->name('pet.deletar');
Route::get('/pet/editar/{id}', 'PetController@editar')->name('pet.editar');
Route::post('/pet/atualizar/{id}', 'PetController@atualizar')->name('pet.atualizar');


//Produto
Route::get('/produto', 'ProdutoController@index')->name('produto.index');
Route::get('/produto/cadastrar', 'ProdutoController@cadastrar')->name('produto.cadastrar');
Route::post('/produto/salvar', 'ProdutoController@salvar')->name('produto.salvar');
Route::get('/produto/deletar/{id}', 'ProdutoController@deletar')->name('produto.deletar');
Route::get('/produto/editar/{id}', 'ProdutoController@editar')->name('produto.editar');
Route::post('/produto/atualizar/{id}', 'ProdutoController@atualizar')->name('produto.atualizar');
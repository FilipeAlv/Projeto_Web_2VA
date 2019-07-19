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

Route::group(['middleware'=>'auth'], function(){

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


//Serviço
Route::get('/servico', 'ServicoController@index')->name('servico.index');
Route::get('/servico/cadastrar', 'ServicoController@cadastrar')->name('servico.cadastrar');
Route::post('/servico/salvar', 'ServicoController@salvar')->name('servico.salvar');
Route::get('/servico/deletar/{id}', 'ServicoController@deletar')->name('servico.deletar');
Route::get('/servico/editar/{id}', 'ServicoController@editar')->name('servico.editar');
Route::post('/servico/atualizar/{id}', 'ServicoController@atualizar')->name('servico.atualizar');


//Agendamento
Route::get('/', 'AgendamentoController@index');
Route::get('/home', 'AgendamentoController@index')->name('home');
Route::get('/agendamento/detalhes/{id}', 'AgendamentoController@detalhe')->name('agendamento.detalhe');
Route::get('/agendamento/iniciar/{id}', 'AgendamentoController@iniciar')->name('agendamento.iniciar');
Route::get('/agendamento/finalizar/{id}', 'AgendamentoController@finalizar')->name('agendamento.finalizar');
Route::get('/agendamento/cancelar/{id}', 'AgendamentoController@cancelar')->name('agendamento.cancelar');
Route::get('/agendamento/cadastrar', 'AgendamentoController@cadastrar')->name('agendamento.cadastrar');
Route::post('/agendamento/salvar', 'AgendamentoController@salvar')->name('agendamento.salvar');
Route::get('/agendamento/deletar/{id}', 'AgendamentoController@deletar')->name('agendamento.deletar');
Route::get('/agendamento/editar/{id}', 'AgendamentoController@editar')->name('agendamento.editar');
Route::post('/agendamento/atualizar/{id}', 'AgendamentoController@atualizar')->name('agendamento.atualizar');

//Usuario
Route::get('/usuario', 'UsuarioController@index')->name('usuario.index');
Route::get('/usuario/cadastrar', 'UsuarioController@cadastrar')->name('usuario.cadastrar');
Route::post('/usuario/salvar', 'UsuarioController@salvar')->name('usuario.salvar');
Route::get('/usuario/deletar/{id}', 'UsuarioController@deletar')->name('usuario.deletar');
Route::get('/usuario/editar/{id}', 'UsuarioController@editar')->name('usuario.editar');
Route::post('/usuario/atualizar/{id}', 'UsuarioController@atualizar')->name('usuario.atualizar');

});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

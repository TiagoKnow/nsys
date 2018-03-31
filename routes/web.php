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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Faturamento -> Rota de clientes
Route::get('/faturamento/listar', ['as' => 'user.consultar', 'uses' => 'FaturamentoController@listarClientes']);
Route::get('/faturamento/cadastrarCliente', ['as' => 'user.cadastrar', 'uses' => 'FaturamentoController@cadastrarCliente']);
Route::post('/faturamento/salvar', ['as' => 'user.salvar', 'uses' => 'FaturamentoController@edit']);

//Vendas -> Rota de produtos
Route::get('/vendas/listar', ['as' => 'user.consultar', 'uses' => 'ProdutoController@index']);

//Produção -> Rota de produção
Route::get('/producao/listar', ['as' => 'user.consultar', 'uses' => 'OsController@index']);

//COntas correntes -> Rota de consulta e manutenção dos boletos
Route::get('/contascorrentes/boletos/listar', ['as' => 'user.consultar', 'uses' => 'BoletosController@index']);
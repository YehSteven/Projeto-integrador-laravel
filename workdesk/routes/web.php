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

Route::get('/contato', function () {
    return view('contato');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/cadastros', function () {
    return view('cadastros');
});

Route::get('/fabricantes', 'FabricanteController@index');
Route::get('/fabricantes/adicionar', 'FabricanteController@create');
Route::post('/fabricantes/adicionar', 'FabricanteController@store');

Route::get('/pedidos', 'PedidosController@index')->name('pedidos.index');
Route::get('/pedidos/novoPedido', 'PedidosController@create');
Route::post('/pedidos/novoPedido', 'PedidosController@store');
Route::get('/pedidos/verPedido', 'PedidosController@ver')->name('pedidos.ver');

Route::get('/produtos', 'ProdutosController@index')->name('produtos.index');
Route::post('/produtos/excluir/{$id}', 'ProdutosController@excluir')->name('produtos.excluir');
Route::get('/produtos/adicionar', 'ProdutosController@create');
Route::post('/produtos/adicionar', 'ProdutosController@store');



Route::get('/distribuidores', 'DistribuidoresController@index')->name('distribuidores.index');
Route::post('/distribuidores/excluir/{$id}', 'DistribuidoresController@excluir')->name('distribuidores.excluir');
Route::get('/distribuidores/adicionar', 'DistribuidoresController@create')->name('distribuidores.create');
Route::post('/distribuidores/adicionar', 'DistribuidoresController@store')->name('distribuidores.store');
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

Route::get('/fabricantes/adicionar', 'FabricanteController@create');
Route::post('/fabricantes/adicionar', 'FabricanteController@store');


Route::get('/novoPedido', function () {
    return view('novoPedido');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/verPedido', function () {
    return view('verPedido');
});

Route::get('/distribuidores', function () {
    return view('distribuidores');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/contatos', 'ContatoController@index')->name('contato.index');
Route::get('/contatos/create', 'ContatoController@create')->name('contato.create');
Route::post('/contatos', 'ContatoController@store')->name('contato.store');
Route::get('/contatos/apagar/{id}', 'ContatoController@destroy');
Route::get('/contatos/editar/{id}', 'ContatoController@edit')->name('contato.edit');
Route::get('/contatos/{id}', 'ContatoController@update')->name('contato.update');




<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/', 'HomeController');


Route::resource('adminapp/rest', 'RestController');
Route::resource('adminrest/menu', 'MenuController');
Route::resource('adminrest/pedidos', 'PedidoController');
Route::resource('adminrest/servicos', 'ServicioController');

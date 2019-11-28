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
    return view('index');
});

Route::get('/aeronaves', "AeronaveController@index");
Route::get('/destinos', "DestinoController@index");
Route::get('/passageiros', "PassageiroController@index");
Route::get('/voos', "VooController@index");
Route::get('/login', "AccountController@loginAction");


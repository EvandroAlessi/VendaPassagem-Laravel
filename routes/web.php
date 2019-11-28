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
Route::post('/aeronaves/create', "AeronaveController@create");
Route::put('/aeronaves/edit', "AeronaveController@edit");
Route::delete('/aeronaves/delete', "AeronaveController@delete");


Route::get('/destinos', "DestinoController@index");
Route::post('/destinos/create', "DestinoController@create");
Route::put('/destinos/edit', "DestinoController@edit");
Route::delete('/destinos/delete', "DestinoController@delete");

Route::get('/passageiros', "PassageiroController@index");
Route::post('/passageiros/create', "PassageiroController@create");
Route::put('/passageiros/edit', "PassageiroController@edit");
Route::delete('/passageiros/delete', "PassageiroController@delete");

Route::get('/login', "AccountController@login");
Route::get('/logout', "AccountController@logout");
Route::get('/register', "AccountController@register");
Route::get('/forgotpassword', "AccountController@forgotpassword");
Route::post('/save', "AccountController@save");


Route::get('/voos', "VooController@index");
Route::post('/voos/create', "VooController@create");
Route::put('/voos/edit',"VooController@edit");
Route::delete('/voos/delete',"VooController@delete");
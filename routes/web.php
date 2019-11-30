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
    return view('Layout');
});

Auth::routes();

Route::get('/aeronaves', "AeronaveController@index")->name('aeronaves');
Route::post('/aeronaves/create', "AeronaveController@create");
Route::post('/aeronaves/edit/{id}', "AeronaveController@edit");
Route::get('/aeronaves/delete/{id}', "AeronaveController@delete");

Route::get('/destinos', "DestinoController@index");
Route::post('/destinos/create', "DestinoController@create");
Route::post('/destinos/edit/{id}', "DestinoController@edit");
Route::get('/destinos/delete/{id}', "DestinoController@delete");

Route::get('/passageiros', "PassageiroController@index");
Route::post('/passageiros/create', "PassageiroController@create");
Route::post('/passageiros/edit/{id}', "PassageiroController@edit");
Route::get('/passageiros/delete/{id}', "PassageiroController@delete");

// Route::get('/login', "AccountController@login");
// Route::get('/logout', "AccountController@logout");
// Route::get('/register', "AccountController@register");
// Route::get('/forgotpassword', "AccountController@forgotpassword");
// Route::post('/save', "AccountController@save");

Route::get('/voos', "VooController@index");
Route::post('/voos/create', "VooController@create");
Route::post('/voos/edit/{id}',"VooController@edit");
Route::get('/voos/delete/{id}',"VooController@delete");

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
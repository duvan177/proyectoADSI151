<?php

use Illuminate\Support\Facades\Auth;


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

Route::get('/contenido', function () {
    return view('contenido/contenido');
});

Auth::routes();


Route::get('/', function() {

    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/programacionComponente','ProgramacionComponenteController@index');
Route::get('/PerfilAlarma','PerfilAlarmaController@index');
Route::resource('componentes','ControllerCrud');
Route::resource('alarma','alarmaController');
Route::delete('componentes/{id}','ControllerCrud@destroy');

Route::post('componentes/{id}','ControllerCrud@update'); 



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
    #return view('welcome');
    return "<h1>Bem vindo ao Omnisciente!</h1>";
});

//Route::get('/macroregion', 'MacroregionController@index');

Route::resource('/macroregion', 'MacroregionController');

Route::get('/home/{macroregion?}', function ($macroregion="sudeste"){
    return "<h1> Hoooome </h1>";
});

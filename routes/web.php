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

Route::get('/', 'IndexController@index')
    ->name('indexp');

Route::get('/pc', 'PcController@index')
    ->name('pcp');
Route::get('/nintendo', 'NintendoController@index')
    ->name('nintendop');

Route::get('/playstation', 'PlaystationController@index')
    ->name('playp');

Route::get('/xbox', 'XboxController@index')
    ->name('xboxp');

    Route::get('/preguntas', 'AdminController@index')
    ->name('preguntasp');


    Route::get('/preguntas/store', 'AdminController@store')
    ->name('store');

/*Route::get('/', function () {
    return view('index');
});
Route::get('/pc', function () {
    return view('pc');
});*/




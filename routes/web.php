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

Route::get('/', 'index@index')
    ->name('indexp');

Route::get('/pc', 'pc@index')
    ->name('pcp');
Route::get('/nintendo', 'nintendo@index')
    ->name('nintendop');

Route::get('/playstation', 'play_station@index')
    ->name('playp');

Route::get('/xbox', 'xbox@index')
    ->name('xboxp');

    Route::get('/preguntas', 'admin@preguntas')
    ->name('preguntasp');

/*Route::get('/', function () {
    return view('index');
});
Route::get('/pc', function () {
    return view('pc');
});*/




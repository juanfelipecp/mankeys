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

    Route::get('/db','indexController@database')
    ->name('db');

/*Route::get('/', function () {
    return view('index');
});
Route::get('/pc', function () {
    return view('pc');
});*/


Route::get('/db/preguntas','indexController@create')->name('crearpre');
Route::get('/db/preguntas/store', 'indexController@store')->name('storepre');
Route::get('/db/preguntas/{preguntas}/edit', 'indexController@edit')->name('editpre');
Route::get('/db/preguntas/{preguntas}/update', 'indexController@update')->name('updatepre');
Route::get('/db/preguntas/{preguntas}', 'indexController@destroy')->name('deletetpre');


Route::get('/db/nintendo','indexController@createnin')->name('crearnin');
Route::get('/db/nintendo/store', 'indexController@storenin')->name('storenin');
Route::get('/db/nintendo/{nintendo}/edit', 'indexController@editnin')->name('editnin');
Route::get('/db/nintendo/{nintendo}/update', 'indexController@updatenin')->name('updatenin');
Route::get('/db/nintendo/{nintendo}', 'indexController@destroynin')->name('deletetnin');

Route::get('/db/pc','indexController@createpc')->name('crearpc');
Route::get('/db/pc/store', 'indexController@storepc')->name('storepc');
Route::get('/db/pc/{pc}/edit', 'indexController@editpc')->name('editpc');
Route::get('/db/pc/{pc}/update', 'indexController@updatepc')->name('updatepc');
Route::get('/db/pc/{pc}', 'indexController@destroypc')->name('deletetpc');

Route::get('/db/xbox','indexController@createxbox')->name('crearxbox');
Route::get('/db/xbox/store', 'indexController@storexbox')->name('storexbox');
Route::get('/db/xbox/{xbox}/edit', 'indexController@editxbox')->name('editxbox');
Route::get('/db/xbox/{xbox}/update', 'indexController@updatexbox')->name('updatexbox');
Route::get('/db/xbox/{xbox}', 'indexController@destroyxbox')->name('deletetxbox');

Route::get('/db/play','indexController@createplay')->name('crearplay');
Route::get('/db/play/store', 'indexController@storeplay')->name('storeplay');
Route::get('/db/play/{play}/edit', 'indexController@editplay')->name('editplay');
Route::get('/db/play/{play}/update', 'indexController@updateplay')->name('updateplay');
Route::get('/db/play/{play}', 'indexController@destroyplay')->name('deletetplay');









Auth::routes();


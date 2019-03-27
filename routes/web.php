<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', 'ClientesController@index')->name('admin-clientes');
Route::get('/clientes/registro', 'ClientesController@registro')->name('admin-clientes-registro');

Route::post('/clientes', 'ClientesController@save')->name('admin-clientes-save');


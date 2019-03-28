<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', 'ClientesController@index')->name('admin-clientes');
Route::get('/clientes/registro', 'ClientesController@registro')->name('admin-clientes-registro');
Route::get('/clientes/registro/{id}', 'ClientesController@registro')->name('admin-clientes-edit');
Route::get('/clientes/registro/{id}/delete', 'ClientesController@delete')->name('admin-clientes-delete');
Route::post('/clientes', 'ClientesController@save')->name('admin-clientes-save');

Route::get('/produtos', 'ProdutosController@index')->name('admin-produtos');
Route::get('/produtos/registro', 'ProdutosController@registro')->name('admin-produtos-registro');
Route::get('/produtos/registro/{id}', 'ProdutosController@registro')->name('admin-produtos-edit');
Route::get('/produtos/registro/{id}/delete', 'ProdutosController@delete')->name('admin-produtos-delete');
Route::post('/produtos', 'ProdutosController@save')->name('admin-produtos-save');


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


Route::get('/','ProdutoController@lista');

Route::get('/json','ProdutoController@listaJson');

Route::get('/produtos',['as'=>'lista', 'uses'=>'ProdutoController@lista']);

Route::get('/produtos/novo',['as'=>'novo','uses'=>'ProdutoController@novo']);

Route::post('/produto/adicionar', 'ProdutoController@adicionar');

Route::get('/produtos/mostra/{id}','ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/remove/{id}','ProdutoController@remove')->where('id', '[0-9]+');

Route::get('/produtos/editar/{id}',['as'=>'editar','uses'=>'ProdutoController@editar'])->where('id', '[0-9]+');

Route::post('/produto/update','ProdutoController@update')->where('id', '[0-9]+');

Auth::routes();

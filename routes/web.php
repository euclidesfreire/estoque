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


Route::get('/', ['as'=>'home', 'uses'=> 'StockController@dashboard']);

Route::get('/json','ProdutoController@listaJson');

Route::group(['prefix' => 'produtos'], function () {
    Route::get('/', ['as'=>'lista', 'uses'=>'ProdutoController@lista']);
    Route::get('/novo',['as'=>'novo','uses'=>'ProdutoController@novo']);
    Route::post('/adicionar', 'ProdutoController@adicionar');
    Route::get('/mostra/{id}','ProdutoController@mostra')->where('id', '[0-9]+');
    Route::get('/remove/{id}','ProdutoController@remove')->where('id', '[0-9]+');
    Route::get('/editar/{id}',['as'=>'editar','uses'=>'ProdutoController@editar'])->where('id', '[0-9]+');
    Route::post('/update','ProdutoController@update')->where('id', '[0-9]+');
});

Route::group(['prefix' => 'vendas'], function () {
    Route::get('/', ['as'=>'vendas.lista', 'uses'=>'VendasController@lista']);
    Route::get('/novo',['as'=>'vendas.novo','uses'=>'VendasController@novo']);
    Route::post('/adicionar', 'VendasController@adicionar');
});

Route::group(['prefix' => 'compras'], function () {
    Route::get('/', ['as'=>'compras.lista', 'uses'=>'ComprasController@lista']);
    Route::get('/novo',['as'=>'compras.novo','uses'=>'ComprasController@novo']);
    Route::post('/adicionar', 'ComprasController@adicionar');
});

Auth::routes();

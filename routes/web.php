<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//produto
Route::get('/produtos/listar', 'App\Http\Controllers\ProdutosController@index')->name('listar_produto');
Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@create')->name('criar_produto');
Route::post('/produtos/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto');
Route::get('/produto/ver/{id}', 'App\Http\Controllers\ProdutosController@show');
Route::get('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@edit');
Route::post('/produto/editar/{id}', 'App\Http\Controllers\ProdutosController@update')->name('alterar_produto');
Route::get('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@delete');
Route::post('/produto/excluir/{id}', 'App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');

//cliente
Route::get('/clientes/listar', 'App\Http\Controllers\ClientesController@index')->name('listar_cliente');
Route::get('/clientes/novo', 'App\Http\Controllers\ClientesController@create')->name('criar_cliente');
Route::post('/clientes/novo', 'App\Http\Controllers\ClientesController@store')->name('registrar_cliente');
Route::get('/cliente/ver/{id}', 'App\Http\Controllers\ClientesController@show');
Route::get('/cliente/editar/{id}', 'App\Http\Controllers\ClientesController@edit');
Route::post('/cliente/editar/{id}', 'App\Http\Controllers\ClientesController@update')->name('alterar_cliente');
Route::get('/cliente/excluir/{id}', 'App\Http\Controllers\ClientesController@delete');
Route::post('/cliente/excluir/{id}', 'App\Http\Controllers\ClientesController@destroy')->name('excluir_cliente');

//compras
Route::get('/compras/listar', 'App\Http\Controllers\ComprasController@index')->name('listar_compra');
Route::get('/compras/novo', 'App\Http\Controllers\ComprasController@create')->name('criar_compra');
Route::post('/compras/novo', 'App\Http\Controllers\ComprasController@store')->name('registrar_compra');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/homeError', [App\Http\Controllers\HomeController::class, 'indexError'])->name('homeError');

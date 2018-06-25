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

Route::get('/', ['uses' => 'Controller@paginaHome']);

Route::get('/servicosInternos',['uses' => 'Controller@servicosInternos']);

//produtos
Route::get('/produtos',['uses' => 'ProductController@index']);
Route::get('/cadastroProduto', ['uses' => 'ProductController@create']);

//categorias
Route::get('/categorias', ['uses' => 'Controller@categorias']);
Route::get('/cadastroCategoria', ['uses' => 'Controller@cadastroCategoria']);

//marcas
Route::get('/marcas', ['uses' => 'Controller@marcas']);
Route::get('/cadastroMarca', ['uses' => 'Controller@cadastroMarca']);

//home pet
Route::get('/homePet', ['uses' => 'Controller@homePet']);

//login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

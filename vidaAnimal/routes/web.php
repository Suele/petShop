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

Route::get('/produtos',['uses' => 'ProductController@produtos']);

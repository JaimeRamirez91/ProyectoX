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

Route::get('/', ['as' => 'admin', 'uses' => 'rutaFormController@index']);

Route::post('/admin/{cod}',['as' => 'admin', 'uses' => 'CuentasController@show']);
Route::post('/pb',['as' => 'pb', 'uses' => 'OTController@store']);
//Route::get('/', function () {$exitCode = Artisan::call('cache:clear');});

/*Recien agragado*/
//Route::Resource('ordent','OTController');
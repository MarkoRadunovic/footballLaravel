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

Route::get('/', 'App\Http\Controllers\LigaController@all');
Route::get('/{liga}', 'App\Http\Controllers\LigaController@view');
Route::get('/{liga}/{utakmica}', 'App\Http\Controllers\UtakmicaController@view');
Route::post('/add-utakmica', 'App\Http\Controllers\UtakmicaController@create');

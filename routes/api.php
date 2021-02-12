<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('lige', 'App\Http\Controllers\LigaController@getAll');
Route::get('lige/{id}', 'App\Http\Controllers\LigaController@getById');
Route::get('utakmice', 'App\Http\Controllers\UtakmicaController@getAll');
Route::get('utakmice/{id}', 'App\Http\Controllers\UtakmicaController@getById');
Route::post('lige', 'App\Http\Controllers\LigaController@save');
Route::post('utakmice', 'App\Http\Controllers\UtakmicaController@save');
Route::delete('lige/{id}', 'App\Http\Controllers\LigaController@delete');
Route::delete('utakmice/{id}', 'App\Http\Controllers\UtakmicaController@delete');


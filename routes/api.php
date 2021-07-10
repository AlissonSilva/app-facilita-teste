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


Route::group(['prefix' => 'apifacilita'], function () {
    Route::get('livros/getlivros', 'App\Http\Controllers\problemas\LivrosController@getLivrosApi');
    Route::get('livros/getlivrosall', 'App\Http\Controllers\problemas\LivrosController@getLivrosApiAll');
});
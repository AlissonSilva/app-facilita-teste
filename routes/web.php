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
})->name('home');

Route::prefix('/appfacilita/problemas/')->group(function () {
    Route::get('one', ['as' => 'problemas.one', 'uses' => 'App\Http\Controllers\problemas\ProblemaOneController@index']);
    Route::get('two', ['as' => 'problemas.two', 'uses' => 'App\Http\Controllers\problemas\ProblemaTwoController@index']);
    Route::get('three', ['as' => 'problemas.three', 'uses' => 'App\Http\Controllers\problemas\ProblemaThreeController@index']);

    //Usuários
    Route::get('two/usuarios', ['as' => 'problemas.two.usuarios', 'uses' => 'App\Http\Controllers\problemas\UsuarioController@index']);

    //Livros
    Route::get('two/livros', ['as' => 'problemas.two.livros', 'uses' => 'App\Http\Controllers\problemas\LivrosController@index']);
    // Route::post('/two/livros/adicionar', ['as' => 'problemas.two.livros.adicionar', 'uses' => 'App\Http\Controllers\problemas\LivrosController@adicionar']);
    // Route::post('/two/livros/editar/{id}', ['as' => 'problemas.two.livros.editar', 'uses' => 'App\Http\Controllers\problemas\LivrosController@editar'])->where('id', '[0-9]+');

    //Locação
    Route::get('two/locacao/', ['as' => 'problemas.two.locacao', 'uses' => 'App\Http\Controllers\problemas\LocacaoController@index']);
    Route::get('two/locacao/reserva/{id}', ['as' => 'problemas.two.locacao.reserva', 'uses' => 'App\Http\Controllers\problemas\LocacaoController@reserva'])->where('id', '[0-9]+');
    Route::post('two/locacao/reserva/adicionar',['as' => 'problemas.two.locacao.reservar.adicionar', 'uses' => 'App\Http\Controllers\problemas\LocacaoController@adicionar']);
    Route::get('two/locacao/reserva/baixar/{id}',['as' => 'problemas.two.locacao.reservar.baixar', 'uses' => 'App\Http\Controllers\problemas\LocacaoController@baixarReserva'])->where('id', '[0-9]+');;
    
});

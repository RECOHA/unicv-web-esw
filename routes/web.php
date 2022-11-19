<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('produtos', [ProdutosController::class, 'index']);
Route::get('produtos/novo', [ProdutosController::class, 'create']);
Route::get('produtos/editar/{id}', [ProdutosController::class, 'edit']);
Route::get('produtos/excluir/{id}', [ProdutosController::class, 'destroy']);
Route::get('produtos/{id}', [ProdutosController::class, 'show']);
Route::post('produtos/gravar/{id}', [ProdutosController::class, 'update']);
Route::post('produtos/salvar', [ProdutosController::class, 'store']);

Route::get('home', [HomeController::class, 'index']);
Route::get('users', [HomeController::class, 'users']);
Route::get('users-db', [HomeController::class, 'usersDatabase']);


Route::get('/usuarios/novo', 'UsersController@create');
Route::post('/usuarios/novo', 'UsersController@store')->name('registrar_usuario');
Route::get('/usuario/ver/{id}', 'UsersController@show');
Route::get('/usuario/editar/{id}', 'UsersController@edit');
Route::post('/usuario/editar/{id}', 'UsersController@update')->name('alterar_usuario');
Route::get('/usuario/excluir/{id}', 'UsersController@delete');
Route::post('/usuario/excluir/{id}', 'UsersController@destroy')->name('excluir_usuario');

Route::get('/', function () {
    return view('welcome');
});

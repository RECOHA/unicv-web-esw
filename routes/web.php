<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('produtos', [ProdutosController::class, 'index']);
Route::get('produtos/{id}', [ProdutosController::class, 'show']);


Route::get('home', [HomeController::class, 'index']);
Route::get('users', [HomeController::class, 'users']);
Route::get('users-db', [HomeController::class, 'usersDatabase']);

Route::get('/', function () {
    return view('welcome');
});

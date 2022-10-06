<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LivroController;
use App\Models\Autor;
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
    return view('index');
});

Route::get('clientes', [AutorController::class, 'index']);
Route::get('add-cliente', [AutorController::class, 'add']);
Route::post('insert-cliente', [AutorController::class, 'insert']);
Route::get('edit-cliente/{id}', [AutorController::class, 'edit']);
Route::put('updade-cliente/{id}', [AutorController::class, 'update']);
Route::get('delete-cliente/{id}', [AutorController::class, 'destroy']);

Route::get('carros', [LivroController::class, 'index']);
Route::get('add-carro', [LivroController::class, 'add']);
Route::post('insert-carro', [LivroController::class, 'insert']);
Route::get('edit-carro/{id}', [LivroController::class, 'edit']);
Route::put('updade-carro/{id}', [LivroController::class, 'update']);
Route::get('delete-carro/{id}', [LivroController::class, 'destroy']);

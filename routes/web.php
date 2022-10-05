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

Route::get('autores', [AutorController::class, 'index']);
Route::get('add-autor', [AutorController::class, 'add']);
Route::post('insert-autor', [AutorController::class, 'insert']);
Route::get('edit-autor/{id}', [AutorController::class, 'edit']);
Route::put('updade-autor/{id}', [AutorController::class, 'update']);
Route::get('delete-autor/{id}', [AutorController::class, 'destroy']);

Route::get('livros', [LivroController::class, 'index']);
Route::get('add-livros', [LivroController::class, 'add']);
Route::post('insert-livro', [LivroController::class, 'insert']);
Route::get('edit-livro/{id}', [LivroController::class, 'edit']);
Route::put('updade-livro/{id}', [LivroController::class, 'update']);
Route::get('delete-livro/{id}', [LivroController::class, 'destroy']);

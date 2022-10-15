<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
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

Route::get('clientes', [ClienteController::class, 'index']);
Route::get('add-cliente', [ClienteController::class, 'add']);
Route::post('insert-cliente', [ClienteController::class, 'insert']);
Route::get('edit-cliente/{id}', [ClienteController::class, 'edit']);
Route::put('updade-cliente/{id}', [ClienteController::class, 'update']);
Route::get('delete-cliente/{id}', [ClienteController::class, 'destroy']);

Route::get('carros', [CarroController::class, 'index']);
Route::get('add-carros', [CarroController::class, 'add']);
Route::post('insert-carro', [CarroController::class, 'insert']);
Route::get('edit-carro/{id}', [CarroController::class, 'edit']);
Route::put('updade-carro/{id}', [CarroController::class, 'update']);
Route::get('delete-carro/{id}', [CarroController::class, 'destroy']);

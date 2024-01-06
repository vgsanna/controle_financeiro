<?php

use App\Http\Controllers\RotasController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', [RotasController::class, 'index']);
Route::get('/cadastro', [RotasController::class, 'cadastro']);
Route::get('/login', [RotasController::class, 'login']);
Route::post('/post', [LoginController::class, 'login'])->name('loginRoute');

<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/', [UsuarioController::class, 'inicial'])->name('inicial');
Route::get('/resultados', [UsuarioController::class, 'resultado'])->name('resultado');
Route::get('/perfil/{usuario}', [UsuarioController::class, 'visualizar'])->name('perfil');
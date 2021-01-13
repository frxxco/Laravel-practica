<?php

use App\Http\Controllers\cursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


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

Route::get('/', homeController::class);

Route::get('cursos', [cursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [cursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [cursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{id}', [cursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [cursoController::class, 'id'])->name('cursos.edit'); 

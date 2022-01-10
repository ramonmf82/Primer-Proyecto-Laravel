<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\NoticiaController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/contacto', [PublicController::class, 'contacto'])->name('contacto');

Route::view('/nosotros', 'nosotros')->name('nosotros');

//CRUD de Noticia

/* Route::get('/noticias/index', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
Route::post('/noticias/store', [NoticiaController::class, 'store'])->name('noticias.store');
Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');
Route::get('/noticias/{noticia}/edit', [NoticiaController::class, 'edit'])->name('noticias.edit');
Route::put('/noticias/{noticia}/update', [NoticiaController::class, 'update'])->name('noticias.update');
Route::delete('/noticias/{noticia}/destroy', [NoticiaController::class, 'destroy'])->name('noticias.destroy'); */

//Que se resumen en la siguiente ruta:

Route::resource('noticias', NoticiaController::class);
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuario', App\Http\Controllers\UsuarioController::class);
Route::resource('costo', App\Http\Controllers\CostoController::class);
Route::resource('curso', App\Http\Controllers\CursoController::class);
Route::resource('instructor', App\Http\Controllers\InstructorController::class);
Route::resource('dependiente', App\Http\Controllers\DependienteController::class);
Route::resource('grupo', App\Http\Controllers\GrupoController::class);
Route::resource('inscripcion', App\Http\Controllers\InscripcionController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

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
    return view('bienvenida');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/album',[App\Http\Controllers\AlbumController::class, 'index']);
Route::get('/album/crear',[App\Http\Controllers\AlbumController::class, 'getCrear']);
Route::post('/album/crear',[App\Http\Controllers\AlbumController::class, 'postCrear']);
Route::get('/album/actualizar',[App\Http\Controllers\AlbumController::class, 'getActualizar']);
Route::post('/album/actualizar',[App\Http\Controllers\AlbumController::class, 'postActualizar']);
Route::get('/album/eliminar',[App\Http\Controllers\AlbumController::class, 'postEliminar']);

Route::get('/album/fotos',[App\Http\Controllers\FotoController::class, 'index']);
Route::get('/foto/crear',[App\Http\Controllers\FotoController::class, 'getCrear']);
Route::post('/foto/crear',[App\Http\Controllers\FotoController::class, 'postCrear']);
Route::get('/foto/actualizar',[App\Http\Controllers\FotoController::class, 'getActualizar']);
Route::post('/foto/actualizar',[App\Http\Controllers\FotoController::class, 'postActualizar']);
Route::get('/foto/eliminar',[App\Http\Controllers\FotoController::class, 'postEliminar']);

Route::get('/usuario',[App\Http\Controllers\UsuarioController::class, 'index']);
Route::get('/usuario/actualizar',[App\Http\Controllers\UsuarioController::class, 'getActualizar']);
Route::post('/usuario/actulizar',[App\Http\Controllers\UsuarioController::class, 'postActualizar']);

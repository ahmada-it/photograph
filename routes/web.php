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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Galeri
Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/create', [App\Http\Controllers\GaleriController::class, 'create'])->name('galeri.create');
Route::post('/galeri/store', [App\Http\Controllers\GaleriController::class, 'store'])->name('galeri.store');
Route::get('/galeri/edit/{id}', [App\Http\Controllers\GaleriController::class, 'edit'])->name('galeri.edit');
Route::patch('/galeri/update/{id}', [App\Http\Controllers\GaleriController::class, 'update'])->name('galeri.update');
Route::get('/galeri/delete/{id}', [App\Http\Controllers\GaleriController::class, 'delete'])->name('galeri.delete');
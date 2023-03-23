<?php

use App\Http\Controllers\BukuTamu;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\BukuTamuModel;
use App\Http\Controllers\Pages;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLoginMiddleware;

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



Route::get('/', [Pages::class, 'index'])->name('pages.index')->middleware(['auth']);
Route::get('/data', [BukuTamu::class, 'index'])->name('bukutamu.index')->middleware(['auth']);
Route::post('/filter/data', [BukuTamu::class, 'submitForm'])->name('post.sort.year');
Route::post('/search/data', [BukuTamu::class, 'search'])->name('bukutamu.search');
Route::post('/add', [BukuTamu::class, 'add']);
Route::delete('/delete/{id}', [BukuTamu::class, 'delete'])->name('bukutamu.delete');
Route::put('/update/{id}', [BukuTamu::class, 'update'])->name('bukutamu.update');

Route::get('/help', [Pages::class, 'help'])->name('pages.help');


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/registering', [RegisterController::class, 'register'])->name('registering');

Route::get('/sesi', [SessionController::class, 'index'])->name('sesi');
Route::post('/sesi/login', [SessionController::class, 'login'])->name('sesiLogin');
 
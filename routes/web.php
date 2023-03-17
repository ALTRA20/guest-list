<?php

use App\Http\Controllers\BukuTamu;
use App\Models\BukuTamuModel;
use App\Http\Controllers\Pages;
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

Route::get('/', [Pages::class, 'index'])->name('pages.index');
Route::get('/data', [BukuTamu::class, 'index'])->name('bukutamu.index');
// Route::get('/data/{year}', [BukuTamu::class, 'sort'])->name('bukutamu.sort');
Route::post('/filter/data', [BukuTamu::class, 'submitForm'])->name('post.sort.year');
Route::post('/search/data', [BukuTamu::class, 'search'])->name('bukutamu.search');
Route::post('/add', [BukuTamu::class, 'add']);
Route::delete('/delete/{id}', [BukuTamu::class, 'delete'])->name('bukutamu.delete');
Route::put('/update/{id}', [BukuTamu::class, 'update'])->name('bukutamu.update');

Route::get('/help', [Pages::class, 'help'])->name('pages.help');
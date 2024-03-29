<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\LoginController;



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

Route::get('/login', [LoginController::class, 'index'])->name('page.login');
Route::get('/', [HomeController::class, 'index'])->name('page.home');
Route::get('/foto', [FotoController::class, 'index'])->name('page.foto');
Route::get('/album', [AlbumController::class, 'index'])->name('page.album');
Route::get('/komentar', [KomentarController::class, 'index'])->name('page.komentar');
Route::get('/like', [LikeController::class, 'index'])->name('page.like');
Route::get('/save', [SaveController::class, 'index'])->name('page.save');


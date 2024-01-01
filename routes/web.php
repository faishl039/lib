<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProsidingController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/tambah/buku', [BookController::class, 'create']);
Route::post('/tambah/buku', [BookController::class, 'store']);
Route::get('/tambah/makalah', [PaperController::class, 'create']);
Route::post('/tambah/makalah', [PaperController::class, 'store']);
Route::get('/tambah/artikel', [ArticleController::class, 'create']);
Route::post('/tambah/artikel', [ArticleController::class, 'store']);
Route::get('/tambah/prosiding', [ProsidingController::class, 'create']);
Route::post('/tambah/prosiding', [ProsidingController::class, 'store']);

Route::get('/buku/{book}', [BookController::class, 'show']);
Route::get('/buku/{book}/download', [BookController::class, 'download']);
Route::get('/makalah/{paper}', [PaperController::class, 'show']);
Route::get('/makalah/{paper}/download', [PaperController::class, 'download']);
Route::get('/artikel/{article}', [ArticleController::class, 'show']);
Route::get('/artikel/{article}/download', [ArticleController::class, 'download']);
Route::get('/prosiding/{prosiding}', [ProsidingController::class, 'show']);
Route::get('/prosiding/{prosiding}/download', [ProsidingController::class, 'download']);

Route::get('/tentang-kami', function () {
    return view('about-us');
});
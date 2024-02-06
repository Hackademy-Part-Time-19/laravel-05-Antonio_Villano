<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PageController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;




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
Route::get('/', [PageController::class,'home'])->name('homepage');
Route::get('/manga', [MangaController::class,'index'])->name('manga.genres');
Route::get('/manga/genre/{genre_id}', [MangaController::class,'byGenre'])->name('manga.genre');
Route::get('/manga/{id}', [MangaController::class,'manga'])->name('manga.byId');
Route::get('/anime', [AnimeController::class,'index'])->name('anime.genres');
Route::get('/anime/genre/{genre_id}', [AnimeController::class,'byGenre'])->name('anime.genre');
Route::get('/anime/{id}', [AnimeController::class,'anime'])->name('anime.byId');
Route::get('/test', [PageController::class,'testApi']);

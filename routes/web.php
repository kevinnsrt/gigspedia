<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PlaylistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/artists', [UserController::class, 'index'])->name('user.artists');
Route::get('/playlist', [UserController::class, 'playlist'])->name('playlist');
Route::post('/playlist/details/{id}', [PlaylistController::class, 'details'])->name('playlist.details');
Route::get('/create/playlist', [PlaylistController::class, 'index'])->name('create.playlist');
Route::get('/genre', [UserController::class, 'genre'])->name('user.genre');
Route::post('/songs/{id}', [UserController::class, 'songs'])->name('songs');
Route::post('/genre/{id}', [GenreController::class, 'index'])->name('genre.artist');
Route::post('/add/{id}', [PlaylistController::class, 'add'])->name('add.songs');
Route::post('/playlist/delete/{id}', [PlaylistController::class, 'delete'])->name('playlist.delete');
Route::post('/playlist/songs/delete/{id}', [PlaylistController::class, 'songsDelete'])->name('playlist.songs.delete');
Route::post('/create/playlist', [PlaylistController::class, 'store'])->name('create.playlist.store');

require __DIR__.'/auth.php';

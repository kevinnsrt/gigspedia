<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenreController;
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
Route::get('/genre', [UserController::class, 'genre'])->name('user.genre');
Route::post('/songs/{id}', [UserController::class, 'songs'])->name('songs');
Route::post('/genre/{id}', [GenreController::class, 'index'])->name('genre.artist');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GamesController::class, 'index']);
Route::get('product/{game}', [GamesController::class, 'show'])->name('product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('games', ProductsController::class);
    Route::resource('categories', CategoryController::class);
});

Route::post('/subscription', [GamesController::class, 'sendEmail'])->name('subscription');

require __DIR__.'/auth.php';

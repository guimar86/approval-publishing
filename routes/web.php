<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/content', [ContentController::class, 'index'])->name('content.index');
Route::get('/content/create', [ContentController::class, 'create'])->name('content.create');
Route::post('/content/store', [ContentController::class, 'store'])->name('content.store');
Route::get('/content/{content}/edit', [ContentController::class, 'edit'])->name('content.edit');
Route::put('/content/{content}/edit', [ContentController::class, 'update'])->name('content.update');
Route::post('/content/{content}/submit', [ContentController::class, 'submit'])->name('content.submit');
Route::get('/content/{content}/view', [ContentController::class, 'show'])->name('content.show');
Route::post('content/{content}/review', [ContentController::class, 'review'])->name('content.review');
Route::post('content/{content}/publish', [ContentController::class, 'publish'])->name('content.publish');

Route::get('/register', [AuthController::class, 'create'])->name('auth.create');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::get('/login', [AuthController::class, 'show'])->name('auth.show');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'destroy'])->name('auth.logout');

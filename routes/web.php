<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/', [ComicController::class, 'index'])->name('users.index');
Route::get('/users/create', [ComicController::class, 'create'])->name('users.create');
Route::get('/users/{id}', [ComicController::class, 'show'])->name('users.show');

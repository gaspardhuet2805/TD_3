<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('/albums', [MainController::class, 'albums'])->name('albums');

Route::get('/albums/{id}', [MainController::class, 'detailalbum'])
    ->where('id', '[0-9]+')
    ->name('detailalbum');
<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

// ROTTE GESTITE DAL PublicController
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/posts', [PublicController::class, 'posts'])->name('posts');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');


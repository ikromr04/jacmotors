<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/models', [PageController::class, 'models'])->name('page.models');
Route::get('/service', [PageController::class, 'service'])->name('page.service');

Route::get('/admin{path}', [PageController::class, 'admin'])
  ->where('path', '.*')
  ->name('page.admin');

<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/models', [PageController::class, 'models'])->name('page.models');
Route::get('/models/{name}', [PageController::class, 'modelsShow'])->name('page.models.show');
Route::get('/test-drive/{name}', [PageController::class, 'test-drive'])->name('page.test-drive');
Route::get('/service', [PageController::class, 'service'])->name('page.service');

Route::get('/admin{path}', [PageController::class, 'admin'])
  ->where('path', '.*')
  ->name('page.admin');

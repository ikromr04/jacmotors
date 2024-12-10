<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('page.index');

Route::get('/models', [PageController::class, 'models'])->name('page.models');
Route::get('/models/{name}', [PageController::class, 'modelsShow'])->name('page.models.show');
Route::get('/test-drive/{name}', [PageController::class, 'testDriveShow'])->name('page.test-drive.show');
Route::get('/test-drive', [PageController::class, 'testDrive'])->name('page.test-drive');
Route::post('/test-drive', [PageController::class, 'apply'])->name('test-drive');
Route::get('/service', [PageController::class, 'service'])->name('page.service');
Route::get('/offers', [PageController::class, 'offers'])->name('page.offers');
Route::get('/news/{id}', [PageController::class, 'newsShow'])->name('page.news.show');

Route::get('/admin{path}', [PageController::class, 'admin'])
  ->where('path', '.*')
  ->middleware(['auth', 'verified'])
  ->name('page.admin');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

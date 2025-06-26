<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CmsController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cms', [CmsController::class, 'index'])->name('cms.index');
    Route::get('/cms/{section}', [CmsController::class, 'edit'])->name('cms.edit');
    Route::post('/cms/{section}', [CmsController::class, 'update'])->name('cms.update');
});

require __DIR__ . '/auth.php';

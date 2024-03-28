<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blank-page', [App\Http\Controllers\HomeController::class, 'blank'])->name('blank');
Route::middleware(['auth'])->group(function () {
    Route::get('/pt', [App\Http\Controllers\PtController::class, 'index'])->name('pt.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});
// Route::get('/pt', [PtController::class, 'index'])->name('pt.index');

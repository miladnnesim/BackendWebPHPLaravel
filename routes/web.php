<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LftController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class , 'index' ])->name('home');

Route::get('/Lookingforteam', [LftController::class , 'index' ])->name('lft');


Route::get('/faq', [FaqController::class , 'index' ]) ->name('faq');

Route::get('/contact', [ContactController::class , 'index' ]) ->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

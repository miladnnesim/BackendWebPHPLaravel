<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LftController;
use App\Http\Controllers\LftduoController;
use App\Http\Controllers\LftscrimController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

// Homepage
Route::get('/', [NewsController::class, 'index'])->name('home');

// Looking for Team (LFT)
Route::get('/Lookingforteam', [LftController::class, 'index'])->name('lft');
Route::get('/Lookingforteam/duo', [LftduoController::class, 'index'])->name('lftduoform');
Route::get('/Lookingforteam/scrim', [LftscrimController::class, 'index'])->name('lftscrimform');
Route::post('/Lookingforteam/scrim', [LftscrimController::class, 'store'])->name('lftscrim.store');
Route::post('/lft/scrim/join/{id}', [LftscrimController::class, 'join'])->name('scrim.join');
Route::post('/lft/scrim/leave/{id}', [LftscrimController::class, 'leave'])->name('scrim.leave');

// News
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin routes (beveiligd met auth middleware)
Route::middleware(['auth'])->group(function () {

    // Admin: News
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    // Admin: FAQ
    Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');
    Route::delete('/faq/{id}', [FaqController::class, 'delete'])->name('faq.delete');

    // Admin: Contact
    Route::get('/admin/contact', [ContactController::class, 'adminIndex'])->name('admin.contact.index');
    Route::get('/admin/contact/{id}', [ContactController::class, 'show'])->name('admin.contact.show');

    // User profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes (geleverd door Laravel Breeze)
require __DIR__.'/auth.php';

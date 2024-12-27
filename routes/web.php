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
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactadminController;
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

    
    Route::get('/newsadmin', [NewsController::class, 'adminIndex'])->name('admin.news.index');
    Route::get('/newsadmin/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/newsadmin', [NewsController::class, 'store'])->name('admin.news.store');
    Route::delete('/newsadmin/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');



    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::post('/users/{id}/promote', [UserController::class, 'promoteToAdmin'])->name('admin.users.promote');
    Route::post('/users/{id}/demote', [UserController::class, 'demoteToUser'])->name('admin.users.demote');
   
    Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('/faq', [FaqController::class, 'store'])->name('faq.store');
    Route::delete('/faq/{id}', [FaqController::class, 'delete'])->name('faq.delete');

   
    Route::get('/admin/contact', [ContactController::class, 'adminIndex'])->name('admin.contact.index');
    Route::get('/admin/contact/{id}', [ContactController::class, 'show'])->name('admin.contact.show');

    
    Route::get('/profileedit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes (geleverd door Laravel Breeze)
require __DIR__.'/auth.php';

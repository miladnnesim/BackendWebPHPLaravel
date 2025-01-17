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

// News
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// Profile
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/faq/ask', [FaqController::class, 'create'])->name('faq.create');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// moet ingelogd zijn om deze routes te kunnen bezoeken
Route::middleware(['auth'])->group(function () {

    Route::get('/Lookingforteam/scrim', [LftscrimController::class, 'index'])->name('lftscrimform');
    Route::post('/Lookingforteam/scrim', [LftscrimController::class, 'store'])->name('lftscrim.store');
    Route::post('/lft/scrim/join/{id}', [LftscrimController::class, 'join'])->name('scrim.join');
    Route::post('/lft/scrim/leave/{id}', [LftscrimController::class, 'leave'])->name('scrim.leave');
    Route::delete('/scrims/delete/{id}', [LftscrimController::class, 'destroy'])->name('scrim.destroy');

    Route::post('/duo', [LftduoController::class, 'store'])->name('duo.store');

    Route::get('/profile/edit/myprofile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

});

// moet ingelogd en admin zijn om deze routes te kunnen bezoeken
Route::middleware(['auth' , 'isAdmin'])->group(function () {

    
    Route::get('/newsadmin', [NewsController::class, 'adminIndex'])->name('admin.news.index');
    Route::get('/newsadmin/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::post('/newsadmin', [NewsController::class, 'store'])->name('admin.news.store');
    Route::delete('/newsadmin/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    Route::get('/newsadmin/{id}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::patch('/newsadmin/{id}', [NewsController::class, 'update'])->name('admin.news.update');




    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::post('/users/{id}/promote', [UserController::class, 'promoteToAdmin'])->name('admin.users.promote');
    Route::post('/users/{id}/demote', [UserController::class, 'demoteToUser'])->name('admin.users.demote');

    
    Route::post('/admin/faq/store', [FaqController::class, 'storeAdmin'])->name('admin.faq.store');
    Route::delete('/faq/category/{id}', [FaqController::class, 'delete'])->name('faq.category.delete');
    Route::delete('/faq/{id}', [FaqController::class, 'delete'])->name('faq.delete');
    Route::patch('/faq/category/{id}', [FaqController::class, 'updateCategory'])->name('faq.category.update');
    Route::patch('/faq/{id}', [FaqController::class, 'update'])->name('faq.update');
    

    

    Route::get('/admin/faq', [FaqController::class, 'indexAdmin'])->name('admin.faq.index');
    Route::post('/admin/faq', [FaqController::class, 'store'])->name('faq.store');
    Route::delete('/admin/faq/{id}', [FaqController::class, 'delete'])->name('faq.delete');
    


   
    Route::get('/admin/contact', [ContactController::class, 'adminIndex'])->name('admin.contact.index');
    Route::get('/admin/contact/{id}', [ContactController::class, 'show'])->name('admin.contact.show');

});

// Auth routes (geleverd door Laravel Breeze)
require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

// FRONTEND CONTROLLERS

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClientController;

// ADMIN CONTROLLERS


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminGalleryController;

// FRONTEND ROUTES

Route::get('/', [HomeController::class, 'index']);

// ARTICLES


Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

// EVENT GALLERY


Route::get('/event-gallery', [EventController::class, 'index']);
Route::get('/event-gallery/{id}', [EventController::class, 'show']);

// CLIENTS


Route::get('/client', [ClientController::class, 'index']);

// ADMIN ROUTES


Route::middleware(['auth'])->prefix('admin')->group(function () {

    // DASHBOARD


    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    // NEXT CRUD

    Route::resource('articles', AdminArticleController::class);
    Route::resource('products', AdminProductController::class);
    Route::resource('events', AdminEventController::class);
    Route::resource('clients', AdminClientController::class);
    Route::resource('galleries', AdminGalleryController::class);
});


// AUTH ROUTES (Laravel Breeze)
require __DIR__ . '/auth.php';

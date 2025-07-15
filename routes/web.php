<?php

use Illuminate\Support\Facades\Route;

// Admin Controller Imports
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;

// Frontend Controller Imports
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// A route for portfolio details page (assuming you'll create one)
// Route::get('/portfolio/{id}', [HomeController::class, 'portfolioDetails'])->name('portfolio.details');


// Admin Authentication Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});


// Admin Panel Routes (Protected by Auth Middleware)
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:admin'], function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Portfolio Management (CRUD)
    Route::resource('portfolio', PortfolioController::class);

    // You can add resource routes for other sections here as you build them
    // Example:
    // Route::resource('team', TeamController::class);
    // Route::resource('services', ServiceController::class);
    // Route::resource('testimonials', TestimonialController::class);
});

// Named routes for frontend sections for easier linking, even if they are anchors.
Route::get('/about', [HomeController::class, 'index'])->name('about');
Route::get('/services', [HomeController::class, 'index'])->name('services');
Route::get('/portfolio', [HomeController::class, 'index'])->name('portfolio');
Route::get('/team', [HomeController::class, 'index'])->name('team');
Route::get('/contact', [HomeController::class, 'index'])->name('contact');

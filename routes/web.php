<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactInfoController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CallToActionController;
use App\Http\Controllers\Admin\HeroSliderController;
use App\Http\Controllers\Admin\SessionController;
use App\Http\Controllers\HomeController;

/*|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| This file is where you may define all of the routes for your application.
| It is loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', [HomeController::class, 'home'])->name('home');

/*|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| Here we define the routes for the admin panel, including authentication,
| profile management, and resource management for various sections of the site.
| These routes are grouped under the 'admin' prefix and 'admin.' name prefix.
| The routes are protected by the 'auth:admin' middleware to ensure that only
| authenticated admins can access them.
| The admin routes include login, logout, password recovery, and various
| resource management routes for portfolio, about section, contact info,
| testimonials, services, call to action, hero slider, and session management.
| The general settings route allows for site-wide configuration changes.
*/


Route::prefix('admin')->name('admin.')->group(function () {
    // Authentication Routes
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    Route::get('/password/reset', [AdminController::class, 'showRecoverForm'])->name('recover');
    Route::post('/password/email', [AdminController::class, 'recover'])->name('password.email');
    Route::get('/password/reset/{token}', [AdminController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [AdminController::class, 'reset'])->name('password.update');

    // Authenticated Routes
    Route::middleware('auth:admin')->group(function () {
        // Dashboard
        Route::get('/', [AdminController::class, 'index'])->name('index');

        // Profile and Settings
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::put('/settings/profile', [AdminController::class, 'updateProfile'])->name('settings.profile');
        Route::put('/settings/password', [AdminController::class, 'updatePassword'])->name('settings.password');
        Route::post('/settings/security', [AdminController::class, 'updateSecurity'])->name('settings.security');

        // General Settings (SiteSetting)
        Route::get('/general-settings', [SiteSettingController::class, 'index'])->name('general_settings.index');
        Route::post('/general-settings', [SiteSettingController::class, 'update'])->name('general_settings.update');

        // Resource Routes for Models
        Route::resource('portfolio', PortfolioController::class)->names('portfolio');
        Route::resource('about', AboutSectionController::class)->names('about');
        Route::resource('contact', ContactInfoController::class)->names('contact');
        Route::resource('testimonial', TestimonialController::class)->names('testimonial');
        Route::resource('service', ServiceController::class)->names('service');
        Route::resource('call-to-action', CallToActionController::class)->names('call_to_action');
        Route::resource('hero-slider', HeroSliderController::class)->names('heroslider');
        Route::resource('session', SessionController::class)->names('session')->only(['index', 'show', 'destroy']);
    });
});

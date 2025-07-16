<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'home'])->name('home.page');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for the admin section of your
| application. These routes are loaded by the RouteServiceProvider within
| a group which contains the "web" middleware group. Now create something great!
| The admin routes are prefixed with 'admin' and include routes for
| dashboard, profile, login, logout, settings, password recovery, and reset.
|
*/

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
    Route::get('/general-settings', [AdminController::class, 'generalsettings'])->name('admin.generalsettings');
    Route::get('/recover-password', [AdminController::class, 'recoverpassword'])->name('admin.recoverpassword');
    Route::get('/reset-password', [AdminController::class, 'resetpassword'])->name('admin.resetpassword');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;

Route::get('/', [Frontend\HomeController::class, 'index'])->name('/');

Auth::routes(['verify' => true, 'register' => false, 'reset' => false]);

Route::get('dashboard', [Backend\DashboardController::class, 'index'])->name('dashboard');

Route::resources([
    'portfolio-categories' => Backend\Portfolio\CategoryController::class,
    'portfolio-posts' => Backend\Portfolio\PostController::class,
]);
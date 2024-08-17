<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;

Route::get('/', [Frontend\HomeController::class, 'index'])->name('/');
Route::get('portfolio', [Frontend\PortofolioController::class, 'index'])->name('portfolio.index');
Route::get('portfolio/detail/{id}', [Frontend\PortofolioController::class, 'show'])->name('portfolio.show');
Route::get('team', [Frontend\TeamController::class, 'index'])->name('team.index');

Auth::routes(['verify' => true, 'register' => false, 'reset' => false]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [Backend\DashboardController::class, 'index'])->name('dashboard');

    Route::resources([
        'portfolio-categories' => Backend\Portfolio\CategoryController::class,
        'portfolio-posts' => Backend\Portfolio\PostController::class,
        'teams' => Backend\TeamController::class,
    ]);
});
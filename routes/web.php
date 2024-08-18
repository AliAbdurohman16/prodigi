<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;

Route::get('/', [Frontend\HomeController::class, 'index'])->name('/');
Route::get('page/{slug}', [Frontend\PageController::class, 'index'])->name('page.index');
Route::get('service/{slug}', [Frontend\ServiceController::class, 'index'])->name('service.index');
Route::get('product', [Frontend\ProductController::class, 'index'])->name('product.index');
Route::get('portfolio', [Frontend\PortofolioController::class, 'index'])->name('portfolio.index');
Route::get('portfolio/detail/{id}', [Frontend\PortofolioController::class, 'show'])->name('portfolio.show');
Route::get('team', [Frontend\TeamController::class, 'index'])->name('team.index');

Auth::routes(['verify' => true, 'register' => false, 'reset' => false]);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [Backend\DashboardController::class, 'index'])->name('dashboard');

    Route::resources([
        'pages' => Backend\PageController::class,
        'services' => Backend\ServiceController::class,
        'product-categories' => Backend\Product\CategoryController::class,
        'product-services' => Backend\Product\ServiceController::class,
        'products' => Backend\Product\ProductController::class,
        'portfolio-categories' => Backend\Portfolio\CategoryController::class,
        'portfolio-posts' => Backend\Portfolio\PostController::class,
        'teams' => Backend\TeamController::class,
    ]);
});
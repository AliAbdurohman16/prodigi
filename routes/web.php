<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;

Route::get('/', [Frontend\HomeController::class, 'index'])->name('/');

Auth::routes(['verify' => true, 'register' => false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

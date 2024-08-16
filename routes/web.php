<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Auth::routes(['verify' => true, 'register' => false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

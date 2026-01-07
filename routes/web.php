<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('client/search', [ClientController::class, 'search'])->name('clients.search');
Route::resource('clients', ClientController::class);
Route::resource('articles', ArticleController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

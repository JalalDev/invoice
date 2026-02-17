<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
})->middleware('auth')->name('index');

Route::get('/about', function () {
    return view('about');
})->middleware('auth')->name('about');

Route::get('client/search', [ClientController::class, 'search'])->name('clients.search')->middleware('auth');
Route::resource('clients', ClientController::class)->middleware('auth');
Route::resource('articles', ArticleController::class)->middleware('auth');

Auth::routes();

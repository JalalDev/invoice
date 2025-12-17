<?php

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

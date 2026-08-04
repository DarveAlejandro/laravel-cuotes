<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
    Route::inertia('quotes', 'quotes')->name('quotes');
    Route::inertia('movies', 'movies')->name('movies');
    Route::inertia('songs', 'songs')->name('songs');
});

require __DIR__ . '/settings.php';

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomepage');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/mission', function () {
    return view('misi');
})->name('misi');

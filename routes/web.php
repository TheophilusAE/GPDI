<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Additional routes for future features
Route::get('/about', function () {
    return view('home');
})->name('about');

Route::get('/services', function () {
    return view('home');
})->name('services');

Route::get('/events', function () {
    return view('home');
})->name('events');

Route::get('/contact', function () {
    return view('home');
})->name('contact');

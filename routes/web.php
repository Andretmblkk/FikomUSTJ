<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home');
})->name('home');

// About page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Programs page
Route::get('/programs', function () {
    return view('programs');
})->name('programs');

// Academic page
Route::get('/academic', function () {
    return view('academic');
})->name('academic');

// News page
Route::get('/news', [NewsController::class, 'index'])->name('news');

// Services page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

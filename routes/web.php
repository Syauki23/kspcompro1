<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/philosophy', function () {
    return view('philosophy');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/training', function () {
    return view('training');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/podcast', function () {
    return view('podcast');
});

Route::get('/contact', function () {
    return view('contact');
});

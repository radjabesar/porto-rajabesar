<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('contact.blade.php', function () {
    return view('contact');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('about.blade.php', function () {
    return view('about');
});

Route::get('porto.blade.php', function () {
    return view('porto');
});


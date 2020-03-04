<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Index');
})->name('index');

Route::get('/nprogress', function () {
    sleep(1);
    return Inertia::render('Index');
})->name('nprogress');

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
})->name('login');

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
})->name('register');

// Whitelist/blacklisting with ziggy:
// https://github.com/tightenco/ziggy#simple-whitelisting--blacklisting-macros

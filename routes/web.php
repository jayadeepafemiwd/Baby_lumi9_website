<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('header.header');
});

Route::get('/header', function () {
    return view('header.header');
});

Route::get('/feedback', function () {
    return view('feedback.parents');
});
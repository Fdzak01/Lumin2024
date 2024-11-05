<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/meditation', function () {
    return view('meditation');
});

Route::get('/beranda', function () {
    return "Halaman Beranda";
});
<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/meditation', function () {
//     return view('meditation');
// });

// Route::get('/beranda', function () {
//     return "Halaman Beranda";
//     });

//Home
Route::get('/', function () {
    return view('profile/login'); 
});


//testing

//History Emotions
Route::get('/mood', function () {
    return view('mood_trackers/index'); 
});


//Artikel
Route::get('/article', function () {
    return view('articles/index'); 
});


//Meditatios
Route::get('/meditation', function () {
    return view('meditations/index'); 
});
Route::get('/meditation/intro', function () {
    return view('meditations/intro'); 
});
Route::get('/meditation/stopwatch', function () {
    return view('meditations/stopwatch'); 
});

//Conseling
Route::get('/conseling', function () {
    return view('consults/index'); 
});

Route::get('/profile/register', function () {
    return view('profile/register');
});

Route::get('/profile', function () {
    return view('profile/login');
});

Route::get('/profile/home', function () {
    return view('profile/home');
});

//Quotes
Route::get('/quotes', function () {
    return view('quotes/index'); 
});
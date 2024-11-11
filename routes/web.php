<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/people', function () {
    return view('people');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/publications', function () {
    return view('publications');
});

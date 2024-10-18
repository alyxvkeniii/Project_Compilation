<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lab1', function () {
    return view('lab1');
});

Route::get('/lab2', function () {
    return view('lab2');
});

Route::get('/lab3', function () {
    return view('lab3');
});

Route::get('/lab4', function () {
    return view('lab4');
});
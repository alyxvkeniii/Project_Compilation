<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;

// Home route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/contact', function () {
    $data = request()->all();
    Mail::to('kaja2022-2721-41239@bicol-u.edu.ph')->send(new ContactMe($data));
    return redirect('/contact')->with('flash', 'Message Sent Successfully');
});

<?php

use App\Http\Middleware\LogRequests;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;

// Route for displaying the Age verification form
Route::get('/', function () {
    return view('Age');
})->name('Age');

// Group routes logreq
Route::middleware([LogRequests::class])->group(function () {
    Route::post('/', function (Request $request) {
        return view('/homepage');
    })->name('age.verify')->middleware(CheckAge::class);//route specific

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

    Route::get('/homepage/{username?}', function ($username = 'Guest') {
        return view('homepage', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('homepage');

    Route::get('/lab1/{username?}', function ($username = 'Guest') {
        return view('lab1', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('lab1');

    Route::get('/lab2/{username?}', function ($username = 'Guest') {
        return view('lab2', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('lab2');

    Route::get('/lab3/{username?}', function ($username = 'Guest') {
        return view('lab3', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('lab3');

    Route::get('/lab4/{username?}', function ($username = 'Guest') {
        return view('lab4', ['username' => $username]);
    })->where('username', '[a-zA-Z]+')->name('lab4');


});

// form submission and redirect to the homepage with username
Route::post('/homepage', function (Request $request) {
    $loginType = $request->input('login_type');
    $username = $loginType === 'guest' ? 'Guest' : $request->input('username');
    if ($loginType === 'user') {
        $request->validate(['username' => 'required|alpha']);
    }
    return redirect()->route('homepage', ['username' => $username]);
});

//Access Denied page
Route::get('/denied', function () {
    return view('denied');
})->name('denied');

Route::get('/logout', function (Request $request) {
    $request->session()->forget('age');
    return redirect('/');
})->name('logout');

// Parameterized route for lab activities (if needed)
Route::get('/lab/{id}', function ($id) {
    // You can use the $id parameter to fetch and display the specific lab activity
    return view('lab', ['id' => $id]); // Make sure to create a corresponding view
});

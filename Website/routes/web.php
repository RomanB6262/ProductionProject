
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('MainPage');
});

Auth::routes(); // Includes login, registration, password reset routes

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
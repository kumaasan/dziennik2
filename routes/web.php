<?php

use App\Http\Controllers\LogOutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::view('/login', 'auth.login')->name('login');

Route::view('/register', 'auth.register')->name('register');

Route::get('/logout', [LogOutController::class, 'logout'])->name('logout')->middleware('auth');

Route::view('settings', 'settings')->name('settings')->middleware('auth');

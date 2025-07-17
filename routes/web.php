<?php

use App\Http\Controllers\LogOutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccpuntController;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::view('/login', 'auth.login')->name('login');

Route::view('/register', 'auth.register')->name('register');

Route::get('/logout', [LogOutController::class, 'logout'])->name('logout')->middleware('auth');

Route::delete('/delete-account', [AccpuntController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');

Route::view('settings', 'settings')->name('settings')->middleware('auth');

Route::view('/subjects', 'subjects.subject' )->name('subjects')->middleware('auth');

Route::view('/subjects/create', 'subjects.addNewSubject')->name('subjects.create')->middleware('auth');

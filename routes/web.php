<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccpuntController;

Route::get('/', [HomePageController::class, 'index'])->name('home');

Route::view('/login', 'auth.login')->name('login');

Route::view('/register', 'auth.register')->name('register');

Route::get('/logout', [LogOutController::class, 'logout'])->name('logout')->middleware('auth');

Route::delete('/delete-account', [AccpuntController::class, 'deleteAccount'])->name('delete.account')->middleware('auth');

Route::view('settings', 'settings')->name('settings')->middleware('auth');

Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects')->middleware('auth');

Route::view('/subjects/create', 'subjects.addNewSubject')->name('subjects.create')->middleware('auth');

Route::view('/grades', 'grades.grades')->name('grades')->middleware('auth');

Route::get('tasks', [TaskController::class, 'index'])->name('tasks')->middleware('auth');

Route::view('/tasks/create', 'tasks.taskManager')->name('tasks.create')->middleware('auth');
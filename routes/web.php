<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::resource('student', \App\Http\Controllers\StudentController::class);
    Route::get('student', [\App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
    Route::get('student/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
    Route::post('student', [\App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
    Route::get('student/{id}', [\App\Http\Controllers\StudentController::class, 'show'])->name('student.show');
    Route::get('student/{id}/edit', [\App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit');
    Route::put('student/{id}', [\App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
    Route::delete('student/{id}', [\App\Http\Controllers\StudentController::class, 'destroy'])->name('student.destroy');


    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('classes')->name('classes');
});

Route::get('/classes', [ClassesController::class, 'index'])->name('classes');

Route::resource('students', StudentController::class);
<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('classes')->name('classes');
});

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/tools.create', [StudentController::class, 'create'])->name('tools.create');
Route::post('/tools.store', [StudentController::class, 'store'])->name('tools.store');
Route::get('/tools.edit', [StudentController::class, 'edit'])->name('tools.edit');
Route::post('/tools.update', [StudentController::class, 'update'])->name('tools.update');
Route::delete('/tools.delete', [StudentController::class, 'destroy'])->name('tools.delete');


Route::get('/classes', [ClassesController::class, 'index'])->name('classes');

Route::resource('students', StudentController::class);
Route::resource('tools', StudentController::class);

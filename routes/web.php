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
Route::post('/tools.edit', [StudentController::class, 'edit'])->name('tools.edit');
Route::get('/tools.update', [StudentController::class, 'update'])->name('update');
Route::get('/tools.delete', [StudentController::class, 'delete'])->name('tools.delete');


Route::get('/classes', [ClassesController::class, 'index'])->name('classes');

Route::resource('students', StudentController::class);

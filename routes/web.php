<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'index'])->name('student');

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/tools.create', [StudentController::class, 'create'])->name('tools.create');
Route::post('/tools.store', [StudentController::class, 'store'])->name('tools.store');
Route::get('/tools.edit/{id}', [StudentController::class, 'edit'])->name('tools.edit');
Route::post('/tools.update/{id}', [StudentController::class, 'update'])->name('tools.update');
Route::delete('/tools/{student}', [StudentController::class, 'destroy'])->name('tools.destroy'); 
Route::put('/student/{id}', [StudentController::class, 'update'])->name('tools.update');


Route::get('/classes', [ClassesController::class, 'index'])->name('classes');

Route::resource('student', StudentController::class);
Route::resource('tools', StudentController::class);

<?php

use Illuminate\Support\Facades\Route;

//route resource for student
//Route::resource('/student', App\Http\Controllers\StudentController::class);

//route resource for jurusan
//Route::resource('/student', App\Http\Controllers\StudentController::class);

//Routing tabel student
use App\Http\Controllers\StudentController;
Route::get('/student', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::delete('/student/{id}', [StudentController::class, 'destroy']);





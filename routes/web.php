<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('hello');
// });

// Route::get('/contact_form', function () {
//     return view('contact_form');
// });

//route resource for student
//Route::resource('/student', App\Http\Controllers\StudentController::class);

//
use App\Http\Controllers\StudentController;
Route::get('/student', [StudentController::class, 'index']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::delete('/student/{id}', [StudentController::class, 'destroy']);





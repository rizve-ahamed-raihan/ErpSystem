<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


//adding student to database
Route::view('/', 'add-student');
Route::post('/', [StudentController::class,'store']);



//Fetching  from database and showing to table
Route::get('/list', [StudentController::class,'list']);

//Deleting from list
Route::get('delete/{id}',[StudentController::class,'delete']);
Route::get('edit/{id}',[StudentController::class,'edit']);
Route::put('edit-student/{id}',[StudentController::class,'editStudent']);

// Sales Entry form route
Route::get('entryform/{id}', [StudentController::class,'create'])->name('sales.entryform');
Route::post('save-product/{id}', [StudentController::class, 'storeProduct'])->name('sales.storeProduct');
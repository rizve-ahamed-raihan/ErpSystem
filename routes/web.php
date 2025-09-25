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


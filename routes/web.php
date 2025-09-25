<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
// Route::get('/', function () {
//     return view('add-student');
// });

//adding student to database
Route::view('/', 'add-student');
Route::post('/', [StudentController::class,'store']);



//Fetching  from database and showing to table
Route::get('/list', [StudentController::class,'add']);




<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



//Link for webpage
Route::get('/', [StudentController::class, 'read']);
//Link for CREATE or Insert Students
Route::post('/createstudent',[StudentController::class, 'create']);
//Link for READ or show students
Route::get('/showstudents',[StudentController::class, 'showstudents']);
//Link for UPDATE or update students
Route::get('/showstudent/{id}',[StudentController::class, 'showstudent']);
Route::post('/updatestudent',[StudentController::class,'update']);
Route::get('/deletestudent/{id}',[StudentController::class,'delete']);

    
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StuController;

Route::get('/', function () {           //calling view
    return view('index'); 
});


Route::view('/home','home');            //calling view
Route::view('/admin','admin.login');    //calling nested view

Route::get('students', [StuController::class,'showStu']);       //calling controller
Route::get('show-home', [StuController::class,'showHome']);       //calling controller
Route::get('show-stu/{user}', [StuController::class,'showStuName']);       //calling controller to pass value
Route::get('view-stu/{user}', [StuController::class,'showStuNameToView']); //calling controller to pass vallue to view
Route::get('admin-user', [StuController::class,'isViewExists']); //calling controller to chk the existence of view
Route::get('welcome', [StuController::class,'getArray']); //calling controller to chk the existence of view
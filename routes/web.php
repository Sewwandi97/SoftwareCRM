<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\EmployeeController;

Route::get('/save',function(){
    $data=App\Models\Employee::all();
   return view('viewuser')->with('employees',$data);
 });


Route::get('/welcome',[EmployeeController::class,'indexwelcome']);
Route::get('/login',[EmployeeController::class,'indexlogin']);
Route::get('/adduser',[EmployeeController::class,'indexadduser']);
Route::get('/viewuser',[EmployeeController::class,'indexviewuser']);
Route::post('/save',[EmployeeController::class,'store']);
Route::get('/deleteUser/{EmpID}',[EmployeeController::class,'deleteuser']);

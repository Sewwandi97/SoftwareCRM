<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EmployeeController;
use App\http\Controllers\EmpController;
use App\http\Controllers\HomeController;


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
Route::get('/updateUser/{EmpID}',[EmployeeController::class,'updateuser']);
Route::post('/update',[EmployeeController::class,'update_user']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/employee', [EmpController::class, 'index'])->name('employee');

//New comment for testing
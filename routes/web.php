<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SmsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SmsController::class,'index'])->name('student');
Route::post('add-student',[SmsController::class,'save'])->name('add.student');
Route::get('manage-student',[SmsController::class,'manageStudent'])->name('manage.student');
Route::post('update-student',[SmsController::class,'update'])->name('update.student');
Route::post('delete-student',[SmsController::class,'delete'])->name('delete.student');
Route::get('edit-student/{id}',[SmsController::class,'edit'])->name('edit.student');


Route::get('department',[DepartmentController::class,'index'])->name('dept');
Route::post('add-department',[DepartmentController::class,'addDepartment'])->name('add.department');
Route::get('manage-department',[DepartmentController::class,'manageDept'])->name('manage.dept');
Route::get('edit-dept/{id}',[DepartmentController::class,'edit'])->name('edit.dept');
Route::post('update-dept',[DepartmentController::class,'update'])->name('update.dept');
Route::post('delete-dept',[DepartmentController::class,'delete'])->name('delete.dept');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CommentController;

Route::any('/signup', [UserController::class, 'signup'])->name('signup');
Route::any('/submit', [UserController::class, 'details'])->name('submit');
Route::any('/signin', [UserController::class, 'signin'])->name('signin');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/getdata',[UserController::class,'getdata']);
Route::post('/mail' , [MailController::class,'mail'])->name('sendmail');
Route::get('/admindash', [UserController::class, 'getdata'])->name('admin.dash');
Route::get('deleteadmin/{id}',[UserController::class,'deleteadmin'])->name('delete.admin');
Route::any('/editadmin/{id}',[UserController::class,'editadmin'])->name('edit.admin');
Route::post('updateadmin/{id}',[UserController::class,'updateadmin'])->name('update.admin');
Route::get('/updatedashboard/{id}',[UserController::class,'updatepage'])->name('updatepage.user');

// User 
Route::post('updateuser/{id}',[UserController::class,'updateuser'])->name('update.user');
Route::get('resetpassword/{id}',[UserController::class,'reset'])->name('reset.pass');
Route::post('changepass/{id}',[UserController::class,'changepass'])->name('change.pass');
      










// Route::resource('data',DataController::class)->names([
//     'create'=>'data.build',
// ]); 
// Route::resource('data.comment',CommentController::class)->shallow();
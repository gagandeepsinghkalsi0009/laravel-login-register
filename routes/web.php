<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Models\AdminPage;

// ---------------------------------------------------------------------------------------------- //
// General Routes 
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

// ---------------------------------------------------------------------------------------------- //

// User Routes
Route::post('updateuser/{id}',[UserController::class,'updateuser'])->name('update.user');
Route::get('resetpassword/{id}',[UserController::class,'reset'])->name('reset.pass');
Route::post('changepass/{id}',[UserController::class,'changepass'])->name('change.pass');

// ---------------------------------------------------------------------------------------------- //

// Admin Pages Routes                                  
Route::any('/addpage',[AdminController::class,'addpage'])->name('add.page');
Route::get('/displaypage',[AdminController::class,'displaypage'])->name('display.page');
// Route::get('/{url_key}',function($url_key){
//     $page = AdminPage::where('url_key',$url_key)
//                         ->where('status',1)
//                         ->first();
//                     return view('cmspage',compact('page'));
// });
Route::get('/deletepage/{id}',[AdminController::class,'deletepage'])->name('delete.page');
Route::get('/editpage/{id}',[AdminController::class,'editpage'])->name('edit.page');
Route::post('updateadmin/{id}',[AdminController::class,'updateadmin'])->name('update.adminpage');

// ---------------------------------------------------------------------------------------------- //

// Forgot Password 
Route::any('/forgotpassword',[ForgotPasswordController::class,'forgotpassword'])->name('forgot.password');

// Reset Password
Route::any('/resetpassord/{token}',[ResetPasswordController::class,'resetpassword'])->name('password.reset');
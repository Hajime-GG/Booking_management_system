<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebpageController;
use Illuminate\Support\Facades\Route;

// Route::get('/tasks',function(){
//     return view('index');
// });

Route::get('/', [WebpageController::class,'landing'])->name('webpage.view');
Route::get('page/{name}', [WebpageController::class,'viewPage'])->name('webpage.dynamic');


Route::get('login', [AuthController::class,'login'])->name('login');
Route::post('login', [AuthController::class,'authenticate'])->name('login.authenticate');


Route::get('signup', [AuthController::class,'signup'])->name('signup');
Route::post('signup', [AuthController::class,'createUser'])->name('signup.create');


Route::get('logout', [AuthController::class,'logout'])->name('logout');


Route::middleware(['auth'])->group(function (){
    Route::get('dashboard/admin', [UserController::class,'adminDashboard'])->name('dashboard.admin');
    Route::get('dashboard/user', [UserController::class,'userDashboard'])->name('dashboard.user');


    Route::get('booking/all', [BookingController::class,'index'])->name('booking.all');
    Route::get('booking/my', [BookingController::class,'userBookings'])->name('booking.my');
    Route::get('booking/add', [BookingController::class,'add'])->name('booking.add');
    Route::post('booking/save', [BookingController::class,'save'])->name('booking.save');
    Route::get('booking/{id}', [BookingController::class,'getBookingsById'])->name('booking.edit');
    Route::post('booking/{id}', [BookingController::class,'updateBookingsById'])->name('booking.update');
    Route::get('booking/delete/{id}', [BookingController::class,'viewDelete'])->name('booking.view.delete');
    Route::post('booking/delete/{id}', [BookingController::class,'delete'])->name('booking.delete');


    Route::get('webpage', [WebpageController::class,'index'])->name('webpage.index');
    Route::get('webpage/add', [WebpageController::class,'add'])->name('webpage.add');
    Route::post('webpage/save', [WebpageController::class,'save'])->name('webpage.save');
    Route::get('webpage/{id}', [WebpageController::class,'edit'])->name('webpage.edit');
    Route::post('webpage/{id}', [WebpageController::class,'update'])->name('webpage.update');
    Route::get('webpage/delete/{id}', [WebpageController::class,'viewDelete'])->name('webpage.view.delete');
    Route::post('webpage/delete/{id}', [WebpageController::class,'delete'])->name('webpage.delete'); 


    Route::get('user', [UserController::class,'index'])->name('user');
    Route::get('user/add', [UserController::class,'add'])->name('user.add');
    Route::post('user/save', [UserController::class,'save'])->name('user.save');
    Route::get('user/{id}', [UserController::class,'edit'])->name('user.edit');
    Route::post('user/{id}', [UserController::class,'update'])->name('user.update');
    Route::get('user/delete/{id}', [UserController::class,'viewDelete'])->name('user.view.delete');
    Route::post('user/delete/{id}', [UserController::class,'delete'])->name('user.delete'); 


    Route::get('profile', [UserController::class,'getProfile'])->name('user.profile.get');
    Route::post('profile', [UserController::class,'saveProfile'])->name('user.profile.save');
});
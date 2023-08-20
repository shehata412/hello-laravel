<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::resource('users', UserController::class);
Route::resource('tickets', TicketsController::class);


//posts/{post}/users/{user}/comments/{comment}
//route('sfdsf',['post'=>15,'user'=>12,'comment'=>17])
//route('sfdsf',[15,12,17])
//route('sfdsf',15)


//posts/15/users/12/comments/17






Route::get('/test', function () {
    return view('home');
})->name('home');

Route::get('/up', function () {
    Artisan::call('up');
    return redirect()->route('dashboard.home');
})->name('up');

Route::get('/down', function () {
    Artisan::call('down');
    return redirect()->route('dashboard.home');
})->name('down');

// Route::resource('/upward',)->only('get', 'post');
// Route::apiResource();
// Route::view('direct/view', 'dashboard.home');

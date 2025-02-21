<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('shaqshouse.index');
});

Route::get('/menu', function () {
    return view('shaqshouse.menu');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'mobile'], function(){
    Route::get('/', [App\Http\Controllers\MobileController::class, 'index'])->name('index.mobile');
    Route::get('/get-started', [App\Http\Controllers\MobileController::class, 'index'])->name('get-started');
    Route::get('/search', [App\Http\Controllers\MobileController::class, 'search'])->name('search');
    Route::post('/search-post', [App\Http\Controllers\MobileController::class, 'search_post'])->name('search_post');

    Route::post('/sign-up', [App\Http\Controllers\MobileLoginController::class, 'sign_up_post'])->name('mobile.signup.post');
    Route::get('/sign-in', [App\Http\Controllers\MobileLoginController::class, 'sign_in'])->name('sign-in');
    Route::get('/sign-up', [App\Http\Controllers\MobileLoginController::class, 'sign_up'])->name('mobile.sign-up');
    Route::get('/forgot-password', [App\Http\Controllers\MobileLoginController::class, 'forgot_password'])->name('mobile.forgot-password');
    Route::get('/email-success', [App\Http\Controllers\MobileLoginController::class, 'email_success'])->name('mobile.email-success');
    Route::get('/logout', [App\Http\Controllers\MobileLoginController::class, 'logouts']);
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('shaqshouse.index');
});

Route::get('/menu', function () {
    return view('shaqshouse.menu');
});
Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);
Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'mobile'], function(){
    Route::get('/', [App\Http\Controllers\MobileController::class, 'index'])->name('index.mobile');
    Route::get('/get-started', [App\Http\Controllers\MobileController::class, 'index'])->name('get-started');
    Route::get('/search', [App\Http\Controllers\MobileController::class, 'search'])->name('search');
    Route::post('/search-post', [App\Http\Controllers\MobileController::class, 'search_post'])->name('search_post');

    Route::group(['prefix'=>'profile'], function(){
        Route::get('/', [App\Http\Controllers\MobileController::class, 'profile'])->name('profile');
        Route::get('/edit-profile', [App\Http\Controllers\MobileController::class, 'edit_profile'])->name('edit-profile');
        Route::post('/edit-profile-post', [App\Http\Controllers\MobileController::class, 'edit_profile_post'])->name('edit-profile-post');
        Route::get('/transactions', [App\Http\Controllers\MobileController::class, 'transactions'])->name('transactions');
        Route::get('/orders', [App\Http\Controllers\MobileController::class, 'orders'])->name('orders');
        Route::get('/orders/place-orders', [App\Http\Controllers\MobileController::class, 'place_orders'])->name('place-orders');
        Route::get('/orders/{id}', [App\Http\Controllers\MobileController::class, 'orders_details'])->name('orders-details');
        Route::get('/orders/re-order/{id}', [App\Http\Controllers\MobileController::class, 'orders_re_order'])->name('orders-re-order');
        Route::get('/orders/mailClient', [App\Http\Controllers\MobileController::class, 'mailClient'])->name('orders-mailClient');
    });

    //Auths
    Route::post('/sign-up', [App\Http\Controllers\MobileLoginController::class, 'sign_up_post'])->name('mobile.signup.post');
    Route::get('/sign-in', [App\Http\Controllers\MobileLoginController::class, 'sign_in'])->name('sign-in');
    Route::get('/sign-up', [App\Http\Controllers\MobileLoginController::class, 'sign_up'])->name('mobile.sign-up');
    Route::get('/forgot-password', [App\Http\Controllers\MobileLoginController::class, 'forgot_password'])->name('mobile.forgot-password');
    Route::get('/email-success', [App\Http\Controllers\MobileLoginController::class, 'email_success'])->name('mobile.email-success');
    Route::get('/logout', [App\Http\Controllers\MobileLoginController::class, 'logouts']);
});

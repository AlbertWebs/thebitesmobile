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
Route::get('/mobile/get-started', [App\Http\Controllers\MobileController::class, 'index'])->name('get-started');

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::post ('/logout',[AuthController::class,'logout'])->name('logout');



Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('register',[AuthController::class,'register']);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('login',[AuthController::class,'login']);

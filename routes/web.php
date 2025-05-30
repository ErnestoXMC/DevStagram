<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\CleanCache;
use Illuminate\Support\Facades\Route;

//!-----RUTAS-----
//
Route::get('/', function () {
    return view('principal');
});

//? REGISTER-CONTROLLER
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');//Opcional, siempre y cuando la ruta sea la misma

//? LOGIN-CONTROLLER
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login');

//? LOGOUT-CONTROLLER
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

//? POST-CONTROLLER
Route::get('/muro', [PostController::class, 'index'])->name('post.index')->middleware('auth');
















<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/controllerUser', [UserController::class, 'index']);
Route::get('/home', function () {
    return view('home');
})->name('home.get');

// Route::get('/login', function() {
//     return view('login');
// });


Route::get('/login', [LoginController::class, 'actionLogin'])->name('login');
Route::get('/register', [RegisterController::class, 'actionRegister'])->name('actionRegister');

Route::post('/home', [ValidateController::class, 'index'])->name('home');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




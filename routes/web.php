<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [IndexController::class, 'index'])->middleware(['auth','verified']);
Route::get('/user-profile', ProfileController::class)->middleware(['auth','verified'])
->name('profile');
Route::get('/user-password', PasswordController::class)->middleware(['auth','verified'])
->name('password');
Route::get('/dashboard', DashboardController::class)->middleware(['auth','verified']);

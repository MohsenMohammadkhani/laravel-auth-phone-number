<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/login', [LoginController::class, 'showFormEnterMobileNumber']);
Route::post('/login', [LoginController::class, 'enterMobileNumber']);

Route::get('/check-sms-code', [LoginController::class, 'showCheckSmsCode']);
Route::post('/check-sms-code', [LoginController::class, 'checkSmsCode']);

Route::get('/user/profile', [LoginController::class, 'profile']);

<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Customer\UserDashboardController;


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

Route::post('/login-account', [LoginController::class, 'login'])->name('login-account');
Route::get('/', [LoginController::class, 'login_form'])->name('login_form');
Route::get('/register', [RegisterController::class, 'register_form'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
    Route::get('user/form', [UserController::class, 'create'])->name('user-index');
    Route::get('user/user/', [UserController::class, 'index'])->name('user-index');
});


Route::group(['prefix' => 'customer'], function () {
    Route::get('dashboard', [UserDashboardController::class, 'dashboard'])->name('customer.dashboard');
});

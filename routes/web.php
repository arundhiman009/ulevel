<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MoneyController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Customer\UserDashboardController;
use App\Http\Controllers\Controller;


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

Route::get('/countries/{id}', [Controller::class, 'get_countries'])->name('get_countries');

Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
    Route::get('user/form', [UserController::class, 'create'])->name('user-create');
    Route::post('user/add', [UserController::class, 'add'])->name('user-add');
    Route::get('user/user/', [UserController::class, 'index'])->name('user-index');
    Route::group(['prefix' => 'withdraw'], function () {
        Route::get('/pending_withdraw', [MoneyController::class, 'pending'])->name('withdraw.pending');
        Route::get('/withdraw_list', [MoneyController::class, 'withdraw'])->name('withdraw.withdraw');
        Route::get('/cancelled_list', [MoneyController::class, 'cancel'])->name('withdraw.cancel');
    });
    Route::group(['prefix' => 'package'], function () {
        Route::get('/package', [PackageController::class, 'index'])->name('package.index');
        Route::get('/package_purchase_list', [PackageController::class, 'purchaseHistory'])->name('package.purchaseHistory');
        Route::get('/package_upgrade_list', [PackageController::class, 'upgradeHistory'])->name('package.upgradeHistory');
    });
});


Route::group(['prefix' => 'customer'], function () {
    Route::get('dashboard', [UserDashboardController::class, 'dashboard'])->name('customer.dashboard');
});



Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

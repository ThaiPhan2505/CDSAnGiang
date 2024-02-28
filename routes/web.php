<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\DoanhnghiepController;
use App\Http\Controllers\Ajax\DashboardController as AjaxDashboardController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\LoginMiddleware;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard/index', [DashboardController::class, 'index'])
->name('dashboard.index')->middleware('admin');
//User
Route::group(['prefix' => 'user'], function() {
    Route::get('index', [UserController::class, 'index'])->name('user.index')->middleware('admin');
    Route::get('create', [UserController::class, 'create'])->name('user.create')->middleware('admin');
    Route::post('store', [UserController::class, 'store'])->name('user.store')->middleware('admin');
    Route::get('{id}/edit', [UserController::class, 'edit'])->where(['id' => '[0-9]+'])->name('user.edit')->middleware('admin');
    Route::get('{id}/delete', [UserController::class, 'delete'])->name('user.delete')->middleware('admin');
    Route::delete('{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy')->middleware('admin');
});
// Doanh Nghiệp
Route::group(['prefix' => 'doanhnghiep'], function() {
    Route::get('index', [DoanhnghiepController::class, 'index'])->name('doanhnghiep.index')->middleware('admin');
    Route::get('create', [DoanhnghiepController::class, 'create'])->name('doanhnghiep.create')->middleware('admin');
    Route::post('store', [DoanhnghiepController::class, 'store'])->name('doanhnghiep.store')->middleware('admin');
    Route::get('{id}/edit', [DoanhnghiepController::class, 'edit'])->name('doanhnghiep.edit')->middleware('admin');
    Route::get('delete', [DoanhnghiepController::class, 'delete'])->name('doanhnghiep.delete')->middleware('admin');
});

//Ajax
Route::post('ajax/dashboard/changeStatus', [AjaxDashboardController::class, 'changeStatus'])
->name('ajax.dashboard.changeStatus')->middleware('admin');


// Đăng nhập
Route::get('admin', [AuthController::class, 'index']) ->name('auth.admin');
Route::post('login', [AuthController::class, 'login']) ->name('auth.login')->middleware(LoginMiddleware::class);;
Route::get('logout', [AuthController::class, 'logout']) ->name('auth.logout');

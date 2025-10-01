<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\student\AuthController as StudentAuthController;
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

Route::get('/', [HomeController::class, 'HomePage'])->name('default.page');

// ADMIN ROUTE
Route::get('/admin/login', [AuthController::class, 'AdminLoginPage'])->name('admin.login.page');




Route::get('/student/login', [StudentAuthController::class, 'StudentLoginPage'])->name('student.login.page');

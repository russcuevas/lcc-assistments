<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ExaminersController;
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
Route::get('/admin/dashboard', [DashboardController::class, 'AdminDashboardPage'])->name('admin.dashboard.page');

Route::get('/admin/admin_management', [AdminController::class, 'AdminManagementPage'])->name('admin.admin.management.page');
Route::get('/admin/admin_management/add', [AdminController::class, 'AdminAddAdminPage'])->name('admin.admin.management.add.page');

Route::get('/admin/add_examiners', [ExaminersController::class, 'AdminExaminersPage'])->name('admin.examiners.page');
Route::get('/admin/add_examiners/add', [ExaminersController::class, 'AdminAddExaminersPage'])->name('admin.examiners.add.page');
Route::get('/admin/examinees_list', [ExaminersController::class, 'AdminExamineesListPage'])->name('admin.examinees.list.page');

Route::get('/admin/course', [CourseController::class, 'AdminCoursePage'])->name('admin.course.page');
Route::get('/admin/course/add', [CourseController::class, 'AdminAddCoursePage'])->name('admin.course.add.page');



Route::get('/student/login', [StudentAuthController::class, 'StudentLoginPage'])->name('student.login.page');

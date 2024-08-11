<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Staff\DashboardController as StaffDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth']);

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/staff', [StaffController::class, 'index'])->name('admin.staff.index');
    Route::post('/admin/staff/create', [StaffController::class, 'store'])->name('admin.staff.create');
    Route::get('/admin/staff/{id}', [StaffController::class, 'show'])->name('admin.staff.show');
    Route::delete('/admin/staff/{id}', [StaffController::class, 'destroy'])->name('admin.staff.destroy');

    Route::post('/admin/policy/add/{id}', [PolicyController::class, 'addPolicy'])->name('admin.policy.add');
    Route::post('/admin/policy/remove/{id}', [PolicyController::class, 'removePolicy'])->name('admin.policy.remove');
});

Route::middleware(['auth', 'role:staff'])->group(function () {
    Route::get('/staff/dashboard', [StaffDashboardController::class, 'index'])->name('staff.dashboard');
});

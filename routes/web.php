<?php

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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::group(['middleware' => 'can:isAdmin'], function () {
        Route::resource('staff', StaffController::class);
        Route::post('staff/{staff}/assign-policy', [StaffController::class, 'assignPolicy'])->name('staff.assignPolicy');
        Route::delete('staff/{staff}/remove-policy/{policy}', [StaffController::class, 'removePolicy'])->name('staff.removePolicy');
    });

    Route::group(['middleware' => 'can:isStaff'], function () {
        Route::get('staff/dashboard', [StaffController::class, 'staffDashboard'])->name('staff.dashboard');
        Route::get('policies/{policy}', [PolicyController::class, 'show'])->name('policies.show');
    });
});
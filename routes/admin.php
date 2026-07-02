<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/booking-management', [AdminController::class, 'bookingManagement']);
    Route::get('/class-schedule', [AdminController::class, 'classSchedule']);
    Route::get('/finance-report', [AdminController::class, 'financeReport']);
    Route::get('/member-database', [AdminController::class, 'memberDatabase']);
    Route::get('/studio-settings', [AdminController::class, 'studioSettings']);
    Route::get('/branch-management', [AdminController::class, 'branchManagement']);
    Route::get('/instructor-portal', [AdminController::class, 'instructorPortal']);
});

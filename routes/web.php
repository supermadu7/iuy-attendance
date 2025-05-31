<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MeetingController;
use App\Http\Controllers\Admin\AttendanceController;

Route::get('/', function () {
    return view('admin/dashboard');
});
Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
})->name('admin.dashboard');

// Meetings
Route::prefix('admin/meetings')->name('admin.meetings.')->group(function() {
    Route::get('/', [MeetingController::class, 'index'])->name('index');
    Route::get('/create', [MeetingController::class, 'create'])->name('create');
    Route::post('/', [MeetingController::class, 'store'])->name('store');
    Route::get('/{meeting}/edit', [MeetingController::class, 'edit'])->name('edit');
    Route::put('/{meeting}', [MeetingController::class, 'update'])->name('update');
    Route::delete('/{meeting}', [MeetingController::class, 'destroy'])->name('destroy');
});

// Attendance
Route::get('/admin/attendance', [AttendanceController::class, 'index'])->name('admin.attendance.index');

//members
Route::get('/admin/members', function () {
    return view('admin/members/index');
})->name('admin.members.index');
Route::get('/admin/members/create', function () {
    return view('admin/members/create');
})->name('admin.members.create');   

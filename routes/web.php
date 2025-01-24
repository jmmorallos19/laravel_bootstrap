<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminNavigationController;

// Pages Route
Route::get('/', [AdminNavigationController::class, 'showLogin'])->name('login');
Route::get('/admin/dashboard', [AdminNavigationController::class, 'showDashboard'])->name('admin.dashboard');
Route::get('/admin/books', [AdminNavigationController::class, 'showBook'])->name('admin.book');
Route::get('/admin/members', [AdminNavigationController::class, 'showMember'])->name('admin.member');
Route::get('/admin/books-report', [AdminNavigationController::class, 'showBooksReport'])->name('admin.bookReport');
Route::get('/admin/damaged-books', [AdminNavigationController::class, 'showDamagedBooks'])->name('admin.damagedBooks');
Route::get('/admin/members-report', [AdminNavigationController::class, 'showMemberReport'])->name('admin.memberReport');
Route::get('/admin/audit-log', [AdminNavigationController::class, 'showAuditLog'])->name('admin.auditLog');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\CheckMember;
use App\Http\Middleware\RedirectIfAuth;

/*============website===============*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/member', [HomeController::class, 'member'])->name('member');
Route::post('/member-submit', [HomeController::class, 'memberSubmit'])->name('member.submit');
Route::get('/member-login', [HomeController::class, 'memberLogin'])
->name('member.login')->middleware(RedirectIfAuth::class);
Route::post('/member-login-confirm', [HomeController::class, 'memberLoginSubmit'])->name('member.login.submit');
Route::get('/member-dashboard', [HomeController::class, 'memberDashboard'])
->name('member.dashboard')->middleware(CheckMember::class);
Route::get('/member-logout', [HomeController::class, 'memberLogout'])->name('member.logout');


/*==================admin=====================*/
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
Route::get('/member-list', [DashboardController::class,'memberList'])->name('dashboard.member');
Route::get('/member-list/edit/{id}', [DashboardController::class,'edit'])->name('memberlist.edit');
Route::get('/member-list/delete/{id}', [DashboardController::class,'delete'])->name('memberlist.delete');
Route::post('/member-approved/{id}', [DashboardController::class,'memberApproved'])->name('member.approved');
});

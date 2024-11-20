<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\CheckMember;
use App\Http\Middleware\RedirectIfAuth;
use App\Http\Controllers\website\MyProjectController;
use App\Http\Controllers\admin\BlogController;

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

// member project
Route::get('/member-project', [MyProjectController::class, 'index'])->name('member.project');
Route::get('/member-project/add', [MyProjectController::class, 'projectAdd'])->name('project.add');
Route::post('/member-project/store', [MyProjectController::class, 'store'])->name('project.store');
Route::get('/member-project/edit/{id}', [MyProjectController::class, 'edit'])->name('project.edit');
Route::post('/member-project/update/{id}', [MyProjectController::class, 'update'])->name('project.update');
Route::get('/member-project/delete/{id}', [MyProjectController::class, 'delete'])->name('project.delete');



/*==================admin=====================*/
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

//member list
Route::get('/member-list', [DashboardController::class,'memberList'])->name('dashboard.member');
Route::get('/member-list/edit/{id}', [DashboardController::class,'edit'])->name('memberlist.edit');
Route::get('/member-list/delete/{id}', [DashboardController::class,'delete'])->name('memberlist.delete');
Route::post('/member-approved/{id}', [DashboardController::class,'memberApproved'])->name('member.approved');

//blog
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/add',[BlogController::class,'create'])->name('blog.add');
Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');



});

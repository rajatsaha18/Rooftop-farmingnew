<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Middleware\CheckMember;
use App\Http\Middleware\RedirectIfAuth;
use App\Http\Controllers\website\MyProjectController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\website\PlantController;

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

// plant
Route::get('/plant', [PlantController::class, 'index'])->name('plant.index');
Route::get('/plant/create', [PlantController::class, 'create'])->name('plant.create');
Route::post('/plant/store', [PlantController::class, 'store'])->name('plant.store');
Route::get('/plant/show/{id}', [PlantController::class, 'show'])->name('plant.show');
Route::post('/plant/updateStage/{id}', [PlantController::class, 'updateStage'])->name('plant.updateStage');
Route::get('/plant/delete/{id}', [PlantController::class, 'deletePlant'])->name('plant.delete');
Route::post('/plant/harvested/{id}', [PlantController::class, 'markAsHarvested'])->name('plant.harvested');

//member project
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

//gallery
Route::get('/gallery',[GalleryController::class,'index'])->name('gallery.index');
Route::get('/gallery/create',[GalleryController::class,'create'])->name('gallery.create');
Route::post('/gallery/store',[GalleryController::class,'store'])->name('gallery.store');
Route::get('/gallery/edit/{id}',[GalleryController::class,'edit'])->name('gallery.edit');
Route::post('/gallery/update/{id}',[GalleryController::class,'update'])->name('gallery.update');
Route::get('/gallery/delete/{id}',[GalleryController::class,'delete'])->name('gallery.delete');

//service
Route::get('/service',[ServiceController::class,'index'])->name('service.index');
Route::get('/service/create',[ServiceController::class,'create'])->name('service.create');
Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');
Route::get('/service/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
Route::post('/service/update/{id}',[ServiceController::class,'update'])->name('service.update');
Route::get('/service/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');

//blog
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/add',[BlogController::class,'create'])->name('blog.add');
Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
Route::get('/blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');



});

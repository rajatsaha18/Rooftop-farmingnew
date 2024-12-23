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
use App\Http\Controllers\website\PlantCareController;
use App\Http\Controllers\Admin\ForumCategoryController;
use App\Http\Controllers\website\ForumPostController;
use App\Http\Controllers\website\ProfileController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\SiteSettingController;

/*============website===============*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/home-service', [HomeController::class, 'service'])->name('home.service');
Route::get('/home-blog', [HomeController::class, 'blog'])->name('home.blog');
Route::get('/home-blog-details/{slug}', [HomeController::class, 'blogDetails'])->name('home.blog.details');
Route::get('/member', [HomeController::class, 'member'])->name('member');
Route::post('/member-submit', [HomeController::class, 'memberSubmit'])->name('member.submit');
Route::get('/member-login', [HomeController::class, 'memberLogin'])
->name('member.login')->middleware(RedirectIfAuth::class);
Route::post('/member-login-confirm', [HomeController::class, 'memberLoginSubmit'])->name('member.login.submit');
Route::get('/member-dashboard', [HomeController::class, 'memberDashboard'])
->name('member.dashboard')->middleware(CheckMember::class);
Route::get('/member-logout', [HomeController::class, 'memberLogout'])->name('member.logout');
Route::post('/forum-access', [HomeController::class, 'forumAccess'])->name('forum.access');

// profile management
Route::middleware('auth')->group(function() {
    Route::get('/profile-edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile-update', [ProfileController::class, 'update'])->name('profile.update');

});


//plant care
Route::get('/forum-post', [ForumPostController::class, 'index'])->name('forum.post.index');
Route::get('/forum-post/create', [ForumPostController::class, 'create'])->name('forum.post.create');
Route::post('/forum-post/store', [ForumPostController::class, 'store'])->name('forum.post.store');
Route::get('/forum-post/show/{id}', [ForumPostController::class, 'show'])->name('forum.post.show');
Route::post('/forum-post/comment/{id}', [ForumPostController::class, 'comment'])->name('forum.comment.store');

Route::get('/plant-care/create/{id}', [PlantCareController::class, 'create'])->name('care_schedule.create');
Route::post('/plant-care/store/{id}', [PlantCareController::class, 'store'])->name('care.schedule.store');

//plant
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

//site setting
Route::get('/site-setting', [SiteSettingController::class,'index'])->name('site.index');
Route::post('/site-setting/update', [SiteSettingController::class,'update'])->name('site.update');

//member list
Route::get('/member-list', [DashboardController::class,'memberList'])->name('dashboard.member');
Route::get('/member-list/edit/{id}', [DashboardController::class,'edit'])->name('memberlist.edit');
Route::get('/member-list/delete/{id}', [DashboardController::class,'delete'])->name('memberlist.delete');
Route::post('/member-approved/{id}', [DashboardController::class,'memberApproved'])->name('member.approved');

//admin profile
Route::get('/admin-profile',[AdminProfileController::class,'edit'])->name('admin.profile.edit');
Route::put('/admin-profile/update',[AdminProfileController::class,'update'])->name('admin.profile.update');

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

//forum category
Route::get('/forum-category',[ForumCategoryController::class,'index'])->name('forum.category.index');
Route::post('/forum-category/create',[ForumCategoryController::class,'store'])->name('forum.category.store');

//blog
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
Route::get('/blog/add',[BlogController::class,'create'])->name('blog.add');
Route::post('/blog/store',[BlogController::class,'store'])->name('blog.store');
Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');
Route::get('/blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');



});

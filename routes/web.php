<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AccessController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\SaranaController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\PartnerController;

// Main Laravel Routing
Route::get('/', function () {return view('web.index');});

Route::get('/about'     , function () {return view('profiles.about');})->name('about');
Route::get('/guru', function () {return view('profiles.teacher');})->name('teacher');
Route::get('/sarana', function () {return view('profiles.sarana');})->name('sarana');
Route::get('/blog', function () {return view('blogs.blog');})->name('blog');
Route::get('/blog/detail', function () {return view('blogs.blog-detail');})->name('blog.detail');
Route::get('/galery', function () {return view('galery.index');})->name('galery');

// Main Auth Routing With Middleware Guest
Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', fn () => null)->name('register');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Main Admin Routing With Middleware Auth
Route::middleware('auth')->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/article', [ArticleController::class, 'index'])->name('admin.article');
    Route::get('/admin/access', [AccessController::class, 'index'])->name('admin.access');
    Route::get('/admin/galery', [GaleryController::class, 'index'])->name('admin.galery');
    Route::get('/admin/sarana', [SaranaController::class, 'index'])->name('admin.sarana');
    Route::get('/admin/guru', [GuruController::class, 'index'])->name('admin.guru');
    Route::get('/admin/partner', [PartnerController::class, 'index'])->name('admin.partner');
    Route::get('/admin/system', [SystemController::class, 'index'])->name('admin.system');
});

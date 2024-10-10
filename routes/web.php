<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Main Laravel Routing
Route::get('/', function () {return view('web.index');});

Route::get('/about', function () {return view('profiles.about');})->name('about');
Route::get('/guru', function () {return view('profiles.teacher');})->name('teacher');
Route::get('/sarana', function () {return view('profiles.sarana');})->name('sarana');


Route::get('/blog', function () {return view('blogs.blog');})->name('blog');
Route::get('/blog/detail', function () {return view('blogs.blog-detail');})->name('blog.detail');

Route::get('/galery', function () {return view('galery.index');})->name('galery');

Route::get('/login', function() {return view('log.login');})->name('sigin'); 
Route::get('/signup', function() {return view('log.signup');})->name('signup'); 

// / Main Admin Routing
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
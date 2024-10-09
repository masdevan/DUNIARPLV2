<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

// Main Laravel Routing
Route::get('/', function () {return view('web.index');});
Route::get('/login', function() {return view('log.login');})->name('sigin');
Route::get('/signup', function() {return view('log.signup');})->name('signup');

// Main Admin Routing
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

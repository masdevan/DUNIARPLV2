<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('web.index');});

Route::get('/blog', function () {return view('artikel.artikel');})->name('blog');
Route::get('/blog/detail', function () {return view('artikel.artikel-detail');})->name('blog.detail');

Route::get('/galery', function () {return view('galery.index');})->name('galery');

Route::get('/login', function() {return view('log.login');})->name('sigin'); 
Route::get('/signup', function() {return view('log.signup');})->name('signup'); 
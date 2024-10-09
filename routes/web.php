<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('web.index');});

Route::get('/login', function() {return view('log.login');})->name('sigin'); 
Route::get('/signup', function() {return view('log.signup');})->name('signup'); 
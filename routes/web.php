<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('article', 'article');

Route::view('/second', 'second');
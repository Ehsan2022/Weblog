<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name("home");
Route::view('/about', 'about')->name("about");
Route::view('/contact', 'contact')->name("contact");
Route::get('post/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
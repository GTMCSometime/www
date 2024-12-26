<?php

use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SecondMigrationController;
use Illuminate\Support\Facades\Route;

Route::get('/my_page', [MyPlaceController::class,'index'])->name('index');


Route::get('/posts', [PostController::class, 'index'])->name('index');

Route::get('/secMig', [SecondMigrationController::class,'index'])->name('index');

Route::get('/posts/create', [PostController::class, 'create'])->name('create');
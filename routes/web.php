<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('foo/user/create', [UserController::class, 'create'])->name('user.create');

Route::post('foo/user/create', [UserController::class, 'store'])->name('user.store');

Route::get('foo/post/create', [PostController::class, 'create'])->name('post.create');

Route::post('foo/post/create', [PostController::class, 'store'])->name('post.store');

Route::get('foo/user/paginate', [UserController::class, 'paginate'])->name('user.paginate');
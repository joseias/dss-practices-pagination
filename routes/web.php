<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('foo/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('foo/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('foo/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('foo/post/store', [PostController::class, 'store'])->name('post.store');

Route::get('foo/user/paginate', [UserController::class, 'paginate'])->name('user.paginate');
Route::get('foo/post/paginate', [PostController::class, 'paginate'])->name('post.paginate');

Route::get('foo/post/show/{id}', [PostController::class, 'show'])->name('post.show');
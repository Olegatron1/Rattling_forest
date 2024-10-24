<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('posts', PostController::class);

Route::apiResource('categories', CategoryController::class);

Route::apiResource('comments', CommentController::class);

Route::apiResource('profiles', ProfileController::class);

Route::apiResource('tags', TagController::class);

Route::apiResource('roles', RoleController::class);

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'profiles'], function () {
    Route::get('/', [\App\Http\Controllers\Profile\IndexController::class, 'index']);
    Route::get('{profile}/show', [\App\Http\Controllers\Profile\ShowController::class, 'show']);
    Route::get('{profile}/store', [\App\Http\Controllers\Profile\StoreController::class, 'store']);
    Route::get('{profile}/update', [\App\Http\Controllers\Profile\UpdateController::class, 'update']);
    Route::get('{profile}/delete', [\App\Http\Controllers\Profile\DeleteController::class, 'delete']);
});

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [\App\Http\Controllers\Post\IndexController::class, 'index']);
    Route::get('{post}/show', [\App\Http\Controllers\Post\ShowController::class, 'show']);
    Route::get('{post}/store', [\App\Http\Controllers\Post\StoreController::class, 'store']);
    Route::get('{post}/update', [\App\Http\Controllers\Post\UpdateController::class, 'update']);
    Route::get('{post}/delete', [\App\Http\Controllers\Post\DeleteController::class, 'delete']);
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [\App\Http\Controllers\Category\IndexController::class, 'index']);
    Route::get('{category}/show', [\App\Http\Controllers\Category\ShowController::class, 'show']);
    Route::get('{category}/store', [\App\Http\Controllers\Category\StoreController::class, 'store']);
    Route::get('{category}/update', [\App\Http\Controllers\Category\UpdateController::class, 'update']);
    Route::get('{category}/delete', [\App\Http\Controllers\Category\DeleteController::class, 'delete']);
});

Route::group(['prefix' => 'tags'], function () {
    Route::get('/', [\App\Http\Controllers\Tag\IndexController::class, 'index']);
    Route::get('{tag}/show', [\App\Http\Controllers\Tag\ShowController::class, 'show']);
    Route::get('{tag}/store', [\App\Http\Controllers\Tag\StoreController::class, 'store']);
    Route::get('{tag}/update', [\App\Http\Controllers\Tag\UpdateController::class, 'update']);
    Route::get('{tag}/delete', [\App\Http\Controllers\Tag\DeleteController::class, 'delete']);
});

Route::group(['prefix' => 'comments'], function () {
    Route::get('/', [\App\Http\Controllers\Comment\IndexController::class, 'index']);
    Route::get('{comment}/show', [\App\Http\Controllers\Comment\ShowController::class, 'show']);
    Route::get('{comment}/store', [\App\Http\Controllers\Comment\StoreController::class, 'store']);
    Route::get('{comment}/update', [\App\Http\Controllers\Comment\UpdateController::class, 'update']);
    Route::get('{comment}/delete', [\App\Http\Controllers\Comment\DeleteController::class, 'delete']);
});


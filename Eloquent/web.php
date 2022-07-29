<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts',postController::class);
Route::resource('posts',postController::class);
Route::get('posts/restore/{id}',[postController::class,'restore'])->name('posts.restore');
Route::get('posts/forceDelete/{id}',[postController::class,'forceDelete'])->name('posts.forceDelete');

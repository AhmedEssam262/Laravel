<?php

use App\Http\Controllers\accountController;
use App\Http\Controllers\postController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/posts', function () {
//    return view('posts');
//});


Route::get('posts',[postController::class,'posts']);
Route::get('posts/create',[postController::class,'create']);
Route::get('posts/show',[postController::class,'show']);
Route::post('posts/insert',[postController::class,'insert'])->name('posts.insert');
//Route::post('posts/insert',[postController::class,'insert']);


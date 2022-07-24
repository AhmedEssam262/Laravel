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
Route::get('posts/show',[postController::class,'show'])->name('posts.show');
Route::post('posts/insert',[postController::class,'insert'])->name('posts.insert');
Route::get('posts/edit/{id}',[postController::class,'edit'])->name('posts.edit');
Route::post('posts/update/{id}',[postController::class,'update'])->name('posts.update');
Route::get('posts/delete/{id}',[postController::class,'delete'])->name('posts.delete');
Route::get('posts/delete',[postController::class,'deleteAll'])->name('posts.delete.all');


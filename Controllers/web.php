<?php

use App\Http\Controllers\postController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function (){
    $username="Ahmed";
    return view("users");
});

Route::get('links', function (){
    $username="Ahmed";
    return view("links");
});Route::get('home', function (){
    $username="Ahmed";
    return view("home");
});


Route::controller(postController::class)->group(function (){
    Route::get('users/data','showUsers');
    Route::get('users/grades','showGrades');
    Route::get('users/update','showUpdate');
    Route::get('users/insert',  'showInsert');
    Route::get('users/delete','showDelete');

});
/*                                     هي هي بس دي طريقة أقدم سيكا
Route::get('users/data',[postController::class,'showUsers']);
Route::get('users/grades',[postController::class,'showGrades']);
Route::get('users/update',[postController::class,'showUpdate']);
Route::get('users/insert',[postController::class,'showInsert']);
Route::get('users/delete',[postController::class,'showDelete']);
*/

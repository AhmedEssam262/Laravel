<?php

use App\Http\Controllers\postController;
use App\Mail\TestEmail;
use App\Mail\testEmail2;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('navbar', function (){

    return view("navbar");
});
Route::get('dashboard/posts',[postController::class,'index']);
Route::get('dashboard/create',[postController::class,'create'])->middleware(['auth'])->name('dashboard');
Route::post('dashboard/createPost',[postController::class,'createPost'])->middleware(['auth'])->name('createPost');
Route::get('posts',[postController::class,'show'])->name('show');

Route::get('/email', function (){
    Mail::to('ahmed.essameldin.essa@gmail.com')->send(new testEmail2());

    return response('the email is sent successfully');
});

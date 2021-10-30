<?php

use App\Models\Post;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardReviewController;

Route::get('/home', function () {
    return view('home',[
        "title"=>'Home',
        "data"=>'Home'
    ]);
});



Route::get('/about', function () {
    return view('about',[
        'title'=>'about',
        'data'=>'about'
    ]);
});


Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/old', [PostController::class, 'old']);
Route::get('/blog/star', [PostController::class, 'star']);
Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/price', [MenuController::class, 'price']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/user', DashboardUserController::class);
Route::resource('/dashboard/review', DashboardReviewController::class);
Route::resource('/dashboard/menu', AdminMenuController::class)->middleware('admin');

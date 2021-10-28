<?php

use App\Http\Controllers\DashboardController;
use App\Models\Post;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;

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

Route::get('/blog/{slug}', [PostController::class, 'show']);

Route::get('blog', [PostController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
  
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');


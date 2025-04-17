<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::view('/', 'home');


//Route::get('/second', function () {
 //   return view('second');
//});

// More simple syntax:
Route::view('/second', 'second');

// Route::view('/', 'home')->name('home');
//Route::get('/', function () {
//    $categories = DB::table('categories')->get();
//    return view('home', ['categories' => $categories]);
//})->name('home');

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

//Route::get('posts/{postId}', [PostController::class, 'show'])
//    ->name('post.show');
Route::get('posts/{post}', [PostController::class, 'show'])
    ->name('post.show');

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('article', 'article')->name('article');
<?php

use App\Http\Controllers\HomeController;
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

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('article', 'article')->name('article');
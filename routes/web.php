<?php

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

Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

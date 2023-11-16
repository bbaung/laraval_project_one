<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return 'Hello Home page';
});

Route::get('/blog', function () {
    return 'Hello Blog page';
});

Route::get('/contact', function () {
    return 'Hello Contact page';
});

Route::get('/post/{id}/{name}', function ($id,$name) {
    return "Your post is ".$id . "<br>"."Your name is ".$name;
});

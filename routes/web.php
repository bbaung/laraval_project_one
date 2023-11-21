<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTwo;
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
    return "Home page";
});

//Route::get('/contact', 'PostTwo@contact');

//Route::get('/post', 'PostController@index' );

Route::get("/contact", function () {
    return view("contact");
});

Route::get("/post", [PostTwo::class,"index"]);

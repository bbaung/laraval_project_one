<?php


use App\Http\Controllers\PostController;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\db;

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

Route::get("/",[PostController::class,"home"]);

Route::get("/insert",function (){
    DB::insert('insert into posts (title, body) values (?, ?)',
    ['PHP Laravel', 'Laravel is the best PHP framework']
    );

    return
            "Insert successfully";
});

Route::get('/show', function () {
    $post = DB::select('select * from posts where id =?',[1]);

    return $post;
});

Route::get('/update', function () {
    $result = DB::update('update posts set title =? where id = ?',
     ['Update title',1]
    );

    return $result;
});

Route::get('/delete', function () {
    DB::delete('delete from posts where id = ?', [1]);
});

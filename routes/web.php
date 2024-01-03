<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/student', [StudentController::class, 'index'])->name('student.index');

Route::get('/student/{id}', [StudentController::class, 'show'])->name('student.show');

Route::get('/sortByAge', [StudentController::class, 'sort'])->name('student.sortAge');

Route::get('/student/data/create', [StudentController::class, 'create'])->name('student.create');

Route::get('/student/data/update', [StudentController::class, 'update'])->name('student.update');

Route::get('/student/data/delete', [StudentController::class, 'delete'])->name('student.delete');

Route::get('/student/data/trash/{id}', [StudentController::class,'trash'])->name('student.soft_delete');

Route::get('/student/data/trashData',[StudentController::class,'trashData'] )->name('student.trash_data');

Route::get('/student/data/restoreData/{id}', [StudentController::class, 'restore'])->name('student.restore');

Route::get('/student/data/delete/{id}', [StudentController::class, 'forceDelete'])->name('student.force_delete');

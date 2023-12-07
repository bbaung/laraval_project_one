<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PharIo\Manifest\Url;

class StudentController extends Controller
{
    //
    public function index(){
         $student = Student ::all();
         return view('student',compact('student'));
    }

    public function show($id){

        $student = Student :: find($id);
        //return $student;
        return view('layout.student', compact('student'));
    }
}

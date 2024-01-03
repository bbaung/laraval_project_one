<?php

namespace App\Http\Controllers;


use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use PharIo\Manifest\Url;

class StudentController extends Controller
{
    //
    public function index(){
         $student = Student ::all();
         return view('student',compact('student'));
    }

    public function show($id){

        $student = Student :: findOrfail($id);
        //return $student;
        return view('layout.student', compact('student'));
    }

    public function sort(){
        $student = Student::orderBy('age','asc')->get();
        return view('student',compact('student'));
        //return "Sort by age";
    }

    public function create(){
        // $student = new Student;
        // $student -> name ="Mg San";
        // $student -> remark ="He is tall";
        // $student -> age =18;
        // $student -> save();

        Student::create([
            'name'=>'Mg Zaw',
            'remark'=>'He is totally big',
            'age'=> 23
        ]);

        return redirect()->route('student.index');
    }

    public function update(){
        $student = Student::find(4);
        $student -> age = 38 ;
        $student -> save();

        return redirect()->route('student.index');
    }

    public function delete(){
        // $student = Student::find(1);
        // $student -> delete();

        Student::destroy(4);

        return redirect()->route('student.index');
    }

    public function trash($id){
            Student::find($id)->delete();
            return redirect()->route('student.index');

    }

    public function trashData(){
      $student = Student::onlyTrashed()->get();
      return view('layout.trashData',compact('student'));
    }

    public function restore($id){
        $student=Student::withTrashed()->where('id',$id)->restore();
        return redirect()->route('student.index');
    }

    public function forceDelete($id){
        Student::find($id)->forceDelete();
        return redirect()->route('student.index');
    }
}

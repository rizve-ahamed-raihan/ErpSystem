<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    function store(Request $request){ //inport to database
      $student= new Student();
      $student->name=$request->name;
       $student->email=$request->email;
        $student->phone=$request->phone;
       $student->save();
       if($student){
        echo "new student added";
       }else{
        echo "operation failed";
       }

    }
    
    function add(){
       $studentData= Student:: all();
      return view('list-student',['students'=>$studentData]);
    }

    // function click(){
    //   // return view('add-student');
    //   return "click function called";
    // }
}

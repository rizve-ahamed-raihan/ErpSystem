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
         return redirect('list');
       }else{
        echo "operation failed";
       }

    }
    
    function list(){
       $studentData= Student:: all();
      return view('list-student',['students'=>$studentData]);
    }

    function delete($id){
        $isDeleted=Student::destroy($id);
        if($isDeleted){
             return redirect('list');
      }
    }

    function edit($id){
      $student = Student::find($id);
      return view('edit',['data'=>$student]);
    }

    function editStudent(Request $request, $id){
      $student = Student::find($id);
      $student->name= $request->name;
      $student->email= $request->email;
      $student->phone= $request->phone;
      if($student->save()){
        return redirect('list');
      }else {
        return "updated Operation Failed";
      }
    }

    
}

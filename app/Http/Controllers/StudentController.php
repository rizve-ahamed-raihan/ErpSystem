<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Salesentry;
use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    function store(Request $request){ //import to database
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

    function search(Request $request){
     
      $studentData=Student::where('name','like',"%$request->search%")->get();
      return view('list-student',['students'=>$studentData]);
    }


    public function create($id)
{
    $customer = Student::findOrFail($id);
    $products = Product::all(); // fetch all products

    return view('salesentry', compact('customer', 'products'));
}


    public function storeProduct(Request $request, $customerId)
{
    $customer = Student::findOrFail($customerId);

    foreach ($request->product_id as $index => $productId) {
        Salesentry::create([
            'customer_id' => $customer->id,
            'product_id'  => $productId,
            'qty'         => $request->qty[$index],
            'price'       => $request->price[$index],
            'discount'    => $request->discount[$index] ?? 0,
            'total'       => ($request->qty[$index] * $request->price[$index]) - ($request->discount[$index] ?? 0),
        ]);
    }

    return redirect()->back()->with('success', 'Sale saved successfully!');
}

}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentsController extends Controller
{
    public function index(){
      $students = Student::latest()->get();
        return view('admin.students.index',compact('students'));
    }
    public function show(Student $student){
        return view('admin.students.show',compact('student'));
    }

   public function create(){

    return view('admin.students.create');
   }


   public function store(Request $request){
     $request->validate([
        'students_name' => 'required',
        'students_id' => 'required|numeric',
        'fathers_name' => 'required',
        'mothers_name' => 'required',
        'contact_number' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'religion' => 'required',
        'department' => 'required',
        'session' => 'required',
        'student_image'=>'required'
     ]);
      Student::create([
        'students_name'=>$request->students_name,
        'students_id'=>$request->students_id,
        'fathers_name'=>$request->fathers_name,
        'mothers_name'=>$request->mothers_name,
        'contact_number'=>$request->contact_number,
        'email'=>$request->email,
        'gender'=>$request->gender,
        'religion'=>$request->religion,
        'department'=>$request->department,
        'session'=>$request->session,
        'student_image'=>$request->student_image->store('student')
      ]);
      return redirect()->route('students.index')->with('message', ' Student Added Success');

   }
   public function edit (Student $student){
    return view('admin.students.edit',compact('student'));
   }
   public function update(Request $request,Student $student){
      $request->validate([
      'students_name' => 'required',
      'students_id' => 'required',
      'fathers_name' => 'required',
      'mothers_name' => 'required',
      'contact_number' => 'required',
      'email' => 'required',
      'gender' => 'required',
      'religion' => 'required',
      'department' => 'required',
      'session' => 'required',

     ]);
        $student->update([
      'students_name'=>$request->students_name,
      'students_id'=>$request->students_id,
      'fathers_name'=>$request->fathers_name,
      'mothers_name'=>$request->mothers_name,
      'contact_number'=>$request->contact_number,
      'email'=>$request->email,
      'gender'=>$request->gender,
      'religion'=>$request->religion,
      'department'=>$request->department,
      'session'=>$request->session,

       ]);
       if($request->file('student_image')){
        if(Storage::exists($student->student_image)){
            Storage::delete($student->student_image);
        }
        $student->update([
            'student_image'=>$request->student_image->store('student')
        ]);
        }
        return redirect()->route('students.index')->with('message','update student success');
    }



   public function delete(Student $student){
      if($student->student_image && Storage::exists($student->student_image)){
          Storage::delete($student->student_image);
      }
      // Storage::delete($student->student_image);
      $student->delete();
      // dd($student);
      return redirect()->route('students.index')->with('message','delete student succes');
  }
}

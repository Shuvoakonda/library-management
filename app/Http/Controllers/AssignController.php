<?php

namespace App\Http\Controllers;
use App\Models\AssignBook;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function create(){
        $students =Student::latest()->get();
        $books =Book::latest()->get();
        return view('admin.assign.assign_create', compact('students','books'));
    }
    public function assign_store(Request $request){
       
        AssignBook::create([
          'students_id'=>$request->students_id,
          'books_id'=>$request->books_id,
          'delivary_date'=>$request->delivary_date,
        ]);
        return redirect()->route('assign.show')->with('message', ' Assign Added Success');
    }
    public function assign_show(AssignBook $assign_show){
        $assign_show = AssignBook::latest()->get();
        return view('admin.assign.index', compact('assign_show'));
    }
    public function assign_edit(AssignBook $assignbook){
        
        $books = Book::all();
        $students = Student::all();
        return view('admin.assign.edit',compact('assignbook','books','students'));
    }
    public function assign_update (AssignBook $assignbook, Request $request){
        
        $request->validate([
            'students_id'=>'required',
            'books_id'=>'required',
            'delivary_date'=>'required'
        ]);
        $assignbook->update([
            'students_id'=>$request->students_id,
            'books_id'=>$request->books_id,
            'delivary_date'=>$request->delivary_date 
        ]);
        return redirect()->route('assign.show')->with('message','Assign Update Success');
    }
    public function assign_delete(AssignBook $assignbook){
       
        $assignbook->delete();
        return redirect()->route('assign.show')->with('message','Delete Assign succes');
    }
}

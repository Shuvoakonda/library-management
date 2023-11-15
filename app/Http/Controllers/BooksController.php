<?php

namespace App\Http\Controllers;
use App\Models\AssignBook;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class BooksController extends Controller
{   
    public function index(){
        $books = Book::latest()->get();
        return view('admin.books.index',compact('books'));
    }

    public function show(Book $book){
        return view('admin.books.show',compact('book'));
    }

    public function create(){
        return view('admin.books.create');
    }

    public function store(Request $request){
        $request->validate([
            'book_category' => 'required',
            'book_name' => 'required',
            'book_author' => 'required',
            'publishing_date' => 'required',
            'book_cover' => 'required',
            'stock' => 'required',
        ]);

        Book::create([
            'book_category'=>$request->book_category,
            'book_name'=>$request->book_name,
            'book_author'=>$request->book_author,
            'publishing_date'=>$request->publishing_date,
            'book_cover'=>$request->book_cover->store('book'),
            'stock'=>$request->stock,
            'slug'=>Str::slug($request->book_name.' '.uniqid()),
        ]);
        return redirect()->route('books.index')->with('message', ' Book Added Success');
    }

    public function edit(Book $book){

        return view('admin.books.edit',compact('book'));
    }

    public function update(Book $book,Request $request){
        $request->validate([
            'book_category' => 'required',
            'book_name' => 'required',
            'book_author' => 'required',
            'publishing_date' => 'required',
            'book_cover' => 'nullable',
            'stock' => 'required'
        ]);

        $book->update([
            'book_category'=>$request->book_category,
            'book_name'=>$request->book_name,
            'book_author'=>$request->book_author,
            'publishing_date'=>$request->publishing_date,
            'stock'=>$request->stock
        ]);

        if($request->file('book_cover')){
            if(Storage::exists($book->book_cover)){
                Storage::delete($book->book_cover);
            }
            $book->update([
                'book_cover'=>$request->book_cover->store('book'),
            ]);
        }
        return redirect()->route('books.index')->with('message','Update Book Succes');
    }

    public function delete(Book $book){
        if(Storage::exists($book->book_cover)){
            Storage::delete($book->book_cover);
        }
        $book->delete();
        return redirect()->route('books.index')->with('message','Delete Book Succes');
    }
   
    
}

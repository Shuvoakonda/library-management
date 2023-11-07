<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  
    public function main_index(){
        return view('admin.index');
    }
    
  

    public function book(){
          return view('admin.book.book');   
    }

    public function book_store(Request $request){
        $request->validate([
            'book_category' => 'required',
            'book_name' => 'required',
            'book_author' => 'required',
            'publishing_date' => 'required',
            'book_cover' => 'required',
            'stock' => 'required',
            'slug' => 'required',
        ]);
        Book::create([
            'book_category'=>$request->book_category,
            'book_name'=>$request->book_name,
            'book_author'=>$request->book_author,
            'publishing_date'=>$request->publishing_date,
            'book_cover'=>$request->book_cover->store('book'),
            'stock'=>$request->stock,
            'slug'=>$request->slug,
        ]);
        return redirect()->route('view_books')->with('message', ' Book Added Success');
    }
    public function view_books(){
        $books = Book::latest()->get();
        return view('admin.book.view_book',compact('books'));
    }
    public function edit_book(Book $book){
        return view('admin.book.edit_book',compact('book'));
    }
    public function update_book(Request $request,Book $book){

        $request->validate([
            'book_category' => 'required',
            'book_name' => 'required',
            'book_author' => 'required',
            'publishing_date' => 'required',
            'book_cover' => 'required',
            'stock' => 'required',
            'slug' => 'required',
        ]);

        $book->update([
            'book_category'=>$request->book_category,
            'book_name'=>$request->book_name,
            'book_author'=>$request->book_author,
            'publishing_date'=>$request->publishing_date,
            'book_cover'=>$request->book_cover->store('book'),
            'stock'=>$request->stock,
            'slug'=>$request->slug,
        ]);
        return redirect()->route('view_books')->with('message,update book succes');
    }
    public function delete_book(Book $book){
        $book->delete();
        return redirect()->route('view_books')->with('message', ' Delete Book Success');
  }

}

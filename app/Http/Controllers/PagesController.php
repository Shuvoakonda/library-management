<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function main_index(){
        return view('admin.index');
    }
    
    public function add_category(){
        return view('admin.category.add-category');
    }
    public function category_store(Request $request){
        // dd($request->all());
       Category::create([
        'category_name'=>$request->category_name,
        'slug'=>$request->slug,
       ]);
       return redirect()->back()->with('message', ' Category Added Success');
    }
    public function view_category(){
        $categories = Category::latest()->get();
        return view('admin.category.view_category',compact('categories'));
    }
    public function edit_category(Category $category){
    
        return view('admin.category.edit_category',compact('category'));
    }
    public function update_category(Request $request, Category $category){
        $category->update([
            'category_name'=>$request->category_name,
            'slug'=>$request->slug,
        ]);
        return redirect('view_category')->with('message', 'Edit Category Success');
    }
    public function delete_category(Category $category){
          $category->delete();
          return redirect('view_category')->with('message', ' Delete Category Success');
    }
}

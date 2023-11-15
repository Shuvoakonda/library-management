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
}

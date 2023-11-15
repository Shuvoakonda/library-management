<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AssignController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'main_index'])->name('main_index')->middleware('auth');


Route::group(['middleware'=>['auth']],function(){
    Route::get('/books',[BooksController::class,'index'])->name('books.index');
      Route::get('/books/{book:slug}',[BooksController::class,'show'])->name('books.show');
    Route::get('/book/create',[BooksController::class,'create'])->name('books.create');
    Route::post('/book/store',[BooksController::class,'store'])->name('books.store');
    Route::get('/book/{book:slug}/edit',[BooksController::class,'edit'])->name('books.edit');
    Route::put('/book/{book:slug}/update',[BooksController::class,'update'])->name('books.update');
    Route::delete('/books/{book:slug}/delete',[BooksController::class,'delete'])->name('books.delete');
   
});


Route::group(['middleware'=>['auth']],function(){
    Route::get('/students',[StudentsController::class,'index'])->name('students.index');
    Route::get('students/create',[StudentsController::class,'create'])->name('students.create');
    Route::get('/students/{student}',[StudentsController::class,'show'])->name('students.show');
    Route::post('/students/store',[StudentsController::class,'store'])->name('students.store');
    Route::get('/students/{student}/edit',[StudentsController::class,'edit'])->name('students.edit');
    Route::put('/students/{student}/update',[StudentsController::class,'update'])->name('students.update');
    Route::delete('/students/{student}/delete',[StudentsController::class,'delete'])->name('students.delete');
});
Route::group(['middleware'=>['auth']],function(){
    Route::get('/assign/books',[AssignController::class,'create'])->name('assign.books');
    Route::post('/assign/store',[AssignController::class,'assign_store'])->name('assign.store');
    Route::get('/assign/show',[AssignController::class,'assign_show'])->name('assign.show');
    Route::get('/assign/edit/{assignbook}',[AssignController::class,'assign_edit'])->name('assign.edit');
    Route::put('/assign/update',[AssignController::class,'assign_update'])->name('assign.update');
    Route::delete('/assign/delete/{assignbook}',[AssignController::class,'assign_delete'])->name('assign.delete');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

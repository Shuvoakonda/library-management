<?php

use App\Http\Controllers\PagesController;
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
// Route::get('/main', [PagesController::class, 'main_index'])->name('main_index');



Route::get('book',[PagesController::class,'book'])->name('book')->middleware('auth');
Route::post('book_store',[PagesController::class,'book_store'])->name('book_store')->middleware('auth');
Route::get('view_books',[PagesController::class,'view_books'])->name('view_books')->middleware('auth');
Route::get('edit_book/{book}',[PagesController::class,'edit_book'])->name('edit_book')->middleware('auth');
Route::post('update_book/{book}',[PagesController::class,'update_book'])->name('update_book')->middleware('auth');
Route::get('delete_book/{book}',[PagesController::class,'delete_book'])->name('delete_book')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

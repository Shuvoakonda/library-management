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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/main', [PagesController::class, 'main_index'])->name('main_index');

Route::post('category_store',[PagesController::class,'category_store'])->name('category_store');
Route::get('category',[PagesController::class,'add_category'])->name('add_category');
Route::get('view_category',[PagesController::class,'view_category'])->name('view_category');
Route::get('edit_category/{category}',[PagesController::class,'edit_category'])->name('edit_category');
Route::post('update_category/{category}',[PagesController::class,'update_category'])->name('update_category');
Route::get('delete_category/{category}',[PagesController::class,'delete_category'])->name('delete_category');
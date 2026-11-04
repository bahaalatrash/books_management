<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoyController;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/books')->group(function (){

Route::get('/',[BooksController::class,'indexx'])->name('books.index');
Route::get('/create',[BooksController::class,'create'])->name('book.create');
Route::get('/{id}/show',[BooksController::class,'showw'])->name('book.show');
Route::get('/{id}/edit',[BooksController::class,'edit'])->name('book.edit');
Route::post('/create',[BooksController::class,'storee'])->name('book.store');
Route::put('/{id}/update',[BooksController::class,'updatee'])->name('book.update');
Route::delete('/{id}/delete', [BooksController::class,'destroyy'])->name('book.destroy');

});

Route::prefix('/categories')->group(function(){
Route::get('/',[CategoyController::class,'index'])->name('categories.index');
Route::get('/create',[CategoyController::class,'create'])->name('category.create');
Route::post('/create',[CategoyController::class,'store'])->name('category.store');
Route::get('/{id}/edit',[CategoyController::class,'edit'])->name('category.edit');
Route::put('/{id}/update',[CategoyController::class,'update'])->name('category.update');
Route::delete('/{id}/delete', [CategoyController::class,'destroy'])->name('category.destroy');


});

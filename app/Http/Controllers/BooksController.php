<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;

class BooksController extends Controller
{


    public function index()
    {
        $books = Book::query()->get();
        return $this->succes("all books in database", $books);
    }

    public function show(int $id)
    {
        $book = Book::query()->where('id', $id)->get();
        return $this->succes("the book that id $id is", $book);
    }
    public function store(StoreBookRequest $request)
    {
        $book = Book::query()->create(
            $request->validated()
        );
        return $this->succes("book created successfully", $book->toArray());
    }
    public function update(UpdateBookRequest $request, int $id)
    {

        $book = Book::query()->where('id', $id)->update(
            $request->validated()
        );

        return $this->succes("book updated successfully");
    }


    public function destroy(int $id)
    {

        Book::query()->where('id', $id)->delete();


        return $this->succes("book deleted successfully");
    }


    //for views
    public function indexx()
    {
        $books = Book::paginate(10);
        return view('books.index', compact('books'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }
    public function storee(StoreBookRequest $request)
    {
        // Book::query()->create(
        //     $request->validated()
        // );
        $book = Book::query()->create([
            'title' => $request->title,
            'author' => $request->author,
            'publication_year' => $request->publication_year,
        ]);
        if ($request->has('categories')) {
            $book->categories()->attach($request->categories);
        }

        return redirect()->route('books.index');
    }

    public function edit(int $id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }
    public function updatee(UpdateBookRequest $request, int $id)
    {

        Book::query()->where('id', $id)->update(
            $request->validated()
        );

        return redirect()->route('books.index');
    }


    public function destroyy(int $id)
    {

        Book::find($id)->delete();

        return redirect()->route('books.index');
    }

    public function showw(int $id)
    {
        // $book = Book::with('cover')->with('categories')->with('reviews')->where('id', $id)->get();
        $book = Book::with(['cover', 'categories', 'reviews'])->findOrFail($id);
        //    return response()->json([
        //     "jkj"=>$book
        //    ]);


        return view('books.show', compact('book'));
    }
}

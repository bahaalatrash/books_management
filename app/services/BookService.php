<?php

namespace App\services;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;

class BookService
{
    /**
     * Create a new class instance.
     */
    public function __construct() {}





    public function index()
    {
        return Book::query()->get();
    }

    public function find(int $id)
    {
        return Book::find($id);
    }
    public function store(StoreBookRequest $request)
    {
        return Book::create($request->validated());
    }

    public function update(UpdateBookRequest $request, int $id)
    {
        return Book::query()->where('id', $id)->update(
            $request->validated()
        );
    }


    public function destroy(int $id)
    {
        Book::find($id)->delete();
    }



    public function viewIndex()
    {
        return   Book::paginate(10);
    }



    public function categories()
    {
        return Category::all();
    }


    public function viewStore(StoreBookRequest $request)
    {


        $book = Book::query()->create($request->only('title', 'author', 'publication_year', 'is_available'));
        if ($request->has('categories')) {
            $book->categories()->attach($request->categories);
        }

        $book->cover()->create($request->only('color', 'format'));
    }



    public function viewUpdate(UpdateBookRequest $request, int $id)
    {


        Book::query()->where('id', $id)->update(
            [
                'title' => $request->title,
                'author' => $request->author,
                'publication_year' => $request->publication_year,
            ]

        );

        $book = Book::find($id);
        $book->cover()->updateOrCreate(
            [

                'book_id' => $book->id,
            ],
            [
                'color' => $request->color,
                'format' => $request->format,
            ]
        );
    }

    public function viewShow(int $id)
    {
        return Book::with(['cover', 'categories', 'reviews'])->findOrFail($id);
    }
}

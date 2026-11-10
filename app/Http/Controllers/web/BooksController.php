<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\services\BookService;

class BooksController extends Controller
{

    public function __construct(protected BookService $bookService) {}

    public function index()
    {
        $books = $this->bookService->viewIndex();
        return view('books.index', compact('books'));
    }


    public function create()
    {
        $categories = $this->bookService->categories();
        return view('books.create', compact('categories'));
    }
    public function store(StoreBookRequest $request)
    {
        $this->bookService->viewStore($request);
        return redirect()->route('books.index');
    }

    public function edit(int $id)
    {
        $book = $this->bookService->find($id);
        return view('books.edit', compact('book'));
    }




    public function update(UpdateBookRequest $request, int $id)
    {

        $this->bookService->viewUpdate($request, $id);

        return redirect()->route('books.index');
    }


    public function destroy(int $id)
    {
        $this->bookService->destroy($id);
        return redirect()->route('books.index');
    }

    public function show(int $id)
    {
        $book = $this->bookService->viewShow($id);

        return view('books.show', compact('book'));
    }
}

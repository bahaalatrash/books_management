<?php

namespace App\Http\Controllers;

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

        $books =  $this->bookService->index();
        return $this->succes("all books in database", $books);
    }

    public function show(int $id)
    {
        $book = $this->bookService->find($id);
        return $this->succes("the book that id $id is", $book);
    }
    public function store(StoreBookRequest $request)
    {
        $book = $this->bookService->store($request);
        return $this->succes("book created successfully", $book->toArray());
    }
    public function update(UpdateBookRequest $request, int $id)
    {

        $book = $this->bookService->update($request, $id);

        return $this->succes("book updated successfully", $book);
    }


    public function destroy(int $id)
    {

        $this->bookService->destroy($id);


        return $this->succes("book deleted successfully");
    }
}

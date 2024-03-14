<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of all the books.
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created book in library.
     */
    public function store(Request $request)
    {
        return Book::create($request->all());
    }

    /**
     * Display the specified book.
     */
    public function show(Book $book)
    {
        return $book;
    }

    /**
     * Update the specified book in library.
     */
    public function update(Request $request, Book $book)
    {        
        $book->update($request->all());
        return $book;
    }

    /**
     * Remove the specified book from library.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Book deleted successfully']);
    }
}

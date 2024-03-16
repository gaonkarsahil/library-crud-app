<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Validator;

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
        $validatedData = $request->only(['validated_data']);
        return Book::create($validatedData['validated_data']);
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
        $validatedData = $request->only(['validated_data']);
        $book->update($validatedData['validated_data']);
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

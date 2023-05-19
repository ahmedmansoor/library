<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('pages.books.index', compact('books'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publisher_name' => 'required|max:255',
            'book_category' => 'required|max:255',
            'isbn' => 'required|unique:books,isbn',
            'year' => 'required|integer',
        ]);

        $book = Book::create($validated);

        return redirect()->route('books.index')
            ->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('pages.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('pages.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publisher_name' => 'required|max:255',
            'book_category' => 'required|max:255',
            'isbn' => 'required|unique:books,isbn,' . $book->id,
            'year' => 'required|integer',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')
            ->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if ($book->borrows()->whereNull('return_date')->exists()) {
            return redirect()->route('books.index')
                ->withErrors('Book cannot be deleted because it is currently borrowed.');
        }

        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Book deleted successfully');
    }
}

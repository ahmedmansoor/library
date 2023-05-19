<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Borrower;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows = Borrow::with('book', 'borrower')->get();
        return view('pages.borrows.index', compact('borrows'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all books and borrowers to populate the select options in your form
        $books = Book::all();
        $borrowers = Borrower::all();

        return view('pages.borrows.create', compact('books', 'borrowers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'borrower_id' => 'required|exists:borrowers,id',
            'book_id' => 'required|exists:books,id',
            'issue_date' => 'required|date',
            'due_date' => 'required|date|after:issue_date',
            'is_late' => 'required|in:no,yes',
        ]);

        $borrow = Borrow::create($validated);

        return redirect()->route('borrows.index')
            ->with('success', 'Borrowing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrow $borrow)
    {
        return view('pages.borrows.show', compact('borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrow $borrow)
    {
        $books = Book::all();
        $borrowers = Borrower::all();

        return view('pages.borrows.edit', compact('borrow', 'books', 'borrowers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrow $borrow)
    {
        $validated = $request->validate([
            'borrower_id' => 'required|exists:borrowers,id',
            'book_id' => 'required|exists:books,id',
            'issue_date' => 'required|date',
            'due_date' => 'required|date|after:issue_date',
            'return_date' => 'nullable|date|after_or_equal:issue_date',
            'is_late' => 'required|in:no,yes',
        ]);

        $borrow->update($validated);

        return redirect()->route('borrows.index')
            ->with('success', 'Borrowing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrow $borrow)
    {
        $borrow->delete();
        return redirect()->route('borrows.index')
            ->with('success', 'Borrow deleted successfully');
    }
}

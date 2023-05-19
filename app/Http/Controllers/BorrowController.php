<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Borrower;
use Carbon\Carbon;
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
        $request->validate([
            'borrower_id' => 'required|exists:borrowers,id',
            'book_id' => 'required|exists:books,id',
            'issue_date' => 'required|date',
            'due_date' => 'required|date|after:issue_date',
        ]);

        Borrow::create($request->all());

        return redirect()->route('borrows.index')
            ->with('success', 'Borrow record created successfully.');
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
        $request->validate([
            'borrower_id' => 'required|exists:borrowers,id',
            'book_id' => 'required|exists:books,id',
            'issue_date' => 'required|date',
            'due_date' => 'required|date|after:issue_date',
            'return_date' => 'nullable|date|after:issue_date',
            'amount' => $borrow->is_late ? 'required|numeric|between:0,999.99' : 'nullable',
            'payment_type' => $borrow->is_late ? 'required|in:cash,credit_card,debit_card' : 'nullable',
        ]);

        $borrow->update($request->all());

        if ($borrow->is_late) {
            $borrow->late_return_fine()->updateOrCreate(
                ['borrow_id' => $borrow->id],
                [
                    'amount' => $request->amount,
                    'payment_type' => $request->payment_type,
                    'payment_date' => now(),
                ]
            );
        }

        return redirect()->route('borrows.index')
            ->with('success', 'Borrow record updated successfully.');
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

    /**
     * Show the form for creating a new return.
     */
    public function createReturn(Request $request)
    {
        $borrowerName = $request->get('borrower_name');

        $borrows = Borrow::whereHas('borrower', function ($query) use ($borrowerName) {
            $query->where('name', 'like', "%$borrowerName%");
        })->get();

        if ($borrows->isEmpty()) {
            return back()->with('error', 'No matching borrowers found.');
        }

        // The Carbon instance is created for comparing dates
        $today = Carbon::now();

        // This array will store the information to be returned
        $borrowInfo = [];

        foreach ($borrows as $borrow) {
            $lateReturnFine = $borrow->late_return_fine;
            $isLate = $today->greaterThan($borrow->due_date);

            $borrowInfo[] = [
                'borrow_id' => $borrow->id,
                'book_title' => $borrow->book->title,
                'due_date' => $borrow->due_date,
                'is_late' => $isLate,
                'late_fee' => $isLate && $lateReturnFine ? $lateReturnFine->amount : 0,
                'payment_type' => $isLate && $lateReturnFine ? $lateReturnFine->payment_type : null
            ];
        }

        return view('pages.borrows.return', compact('borrowInfo'));
    }



    /**
     * Store a newly created return in storage.
     */
    public function storeReturn(Request $request)
    {
        // Validate the request...

        // Mark the book as returned...

        return redirect()->route('returns.create')->with('success', 'Book returned successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Borrower;
use Illuminate\Http\Request;

class BorrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrowers = Borrower::all();
        return view('pages.borrowers.index', compact('borrowers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.borrowers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'nic' => 'required|unique:borrowers,nic',
            'phone_number' => 'required|unique:borrowers,phone_number',
            'address' => 'required',
        ]);

        $borrower = Borrower::create($validated);

        return redirect()->route('borrowers.index')
            ->with('success', 'Borrower created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Borrower $borrower)
    {
        return view('pages.borrowers.show', compact('borrower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrower $borrower)
    {
        return view('pages.borrowers.edit', compact('borrower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Borrower $borrower)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'nic' => 'required|unique:borrowers,nic,' . $borrower->id,
            'phone_number' => 'required|unique:borrowers,phone_number,' . $borrower->id,
            'address' => 'required',
        ]);

        $borrower->update($validated);

        return redirect()->route('borrowers.index')
            ->with('success', 'Borrower updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrower $borrower)
    {
        if ($borrower->borrows()->whereNull('return_date')->exists()) {
            return redirect()->route('borrowers.index')
                ->withErrors('Borrower cannot be deleted because they have books currently checked out.');
        }

        if ($borrower->borrows()->whereHas('lateReturnFine', function ($query) {
            $query->whereNull('payment_date');
        })->exists()) {
            return redirect()->route('borrowers.index')
                ->withErrors('Borrower cannot be deleted because they have unpaid fines.');
        }

        $borrower->delete();

        return redirect()->route('borrowers.index')
            ->with('success', 'Borrower deleted successfully');
    }
}

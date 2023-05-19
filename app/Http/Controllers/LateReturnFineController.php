<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\LateReturnFine;
use Illuminate\Http\Request;

class LateReturnFineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fines = LateReturnFine::with('borrow.book', 'borrow.borrower')->get();
        return view('pages.fines.index', compact('fines'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all borrows to populate the select options in your form
        $borrows = Borrow::all();

        return view('pages.fines.create', compact('borrows'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'borrow_id' => 'required|exists:borrows,id',
            'amount' => 'required|numeric|min:0',
            'payment_type' => 'required',
            'payment_date' => 'required|date',
        ]);

        $fine = LateReturnFine::create($validated);

        return redirect()->route('fines.index')
            ->with('success', 'Fine created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(LateReturnFine $lateReturnFine)
    {
        return view('pages.fines.show', compact('lateReturnFine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LateReturnFine $fine)
    {
        $borrows = Borrow::all();

        return view('pages.fines.edit', compact('fine', 'borrows'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LateReturnFine $fine)
    {
        $validated = $request->validate([
            'borrow_id' => 'required|exists:borrows,id',
            'amount' => 'required|numeric|min:0',
            'payment_type' => 'required',
        ]);

        $fine->update($validated);

        return redirect()->route('fines.index')
            ->with('success', 'Fine updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LateReturnFine $fine)
    {
        $fine->delete();
        return redirect()->route('fines.index')
            ->with('success', 'Fine deleted successfully');
    }
}

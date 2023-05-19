@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-5">
            <h4 class="h4">Edit late fine</h4>
        </div>
        <form action="{{ route('fines.update', ['fine' => $fine->id]) }}" method="POST" class="form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="borrower_name" class="label">Borrower</label>
                <input type="text" id="borrower_name" name="borrower_name" class="input-field form-control" value="{{ $fine->borrow->borrower->name }}" readonly>
                <input type="hidden" id="borrow_id" name="borrow_id" value="{{ $fine->borrow->id }}">
            </div>

            <div class="form-group">
                <label for="book_name" class="label">Book</label>
                <input type="text" id="book_name" name="book_name" class="input-field form-control" value="{{ $fine->borrow->book->title }}" readonly>
            </div>

            <div class="form-group">
                <label for="amount" class="label">Amount</label>
                <input type="text" id="amount" name="amount" class="input-field form-control" value="{{ $fine->amount }}" required>
            </div>

            <div class="form-group">
                <label for="payment_type" class="label">Payment Type</label>
                <select id="payment_type" name="payment_type" class="input-field form-control" required>
                    <option value="Cash" {{ $fine->payment_type == 'Cash' ? 'selected' : '' }}>Cash</option>
                    <option value="Credit Card" {{ $fine->payment_type == 'Credit Card' ? 'selected' : '' }}>Credit Card</option>
                    <option value="Debit Card" {{ $fine->payment_type == 'Debit Card' ? 'selected' : '' }}>Debit Card</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Fine</button>
            </div>
        </form>
    </div>
</section>
@endsection

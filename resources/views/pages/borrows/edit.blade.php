@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-5">
            <h4 class="h4">Edit checkout</h4>
        </div>
        <form action="{{ route('borrows.update', ['borrow' => $borrow->id]) }}" method="POST" class="form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="borrower_id" class="label">Borrower</label>
                <select id="borrower_id" name="borrower_id" class="input-field form-control" required>
                    @foreach($borrowers as $borrower)
                        <option value="{{ $borrower->id }}" {{ $borrow->borrower_id == $borrower->id ? 'selected' : '' }}>
                            {{ $borrower->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="book_id" class="label">Book</label>
                <select id="book_id" name="book_id" class="input-field form-control" required>
                    @foreach($books as $book)
                        <option value="{{ $book->id }}" {{ $borrow->book_id == $book->id ? 'selected' : '' }}>
                            {{ $book->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="due_date" class="label">Due Date</label>
                <input type="date" id="due_date" name="due_date" class="input-field form-control" value="{{ $borrow->due_date->format('Y-m-d') }}" required>
            </div>

            <div class="form-group">
                <label for="issue_date" class="label">Issue Date</label>
                <input type="date" id="issue_date" name="issue_date" class="input-field form-control" value="{{ $borrow->issue_date->format('Y-m-d') }}" required>
            </div>

            <div class="form-group">
                <label for="return_date" class="label">Return Date (Optional)</label>
                <input type="date" id="return_date" name="return_date" class="input-field form-control" value="{{ $borrow->return_date ? $borrow->return_date->format('Y-m-d') : '' }}">
            </div>

            @if($borrow->is_late)
                <div class="form-group">
                    <label for="amount" class="label">Fine Amount</label>
                    <input type="number" id="amount" name="amount" class="input-field form-control">
                </div>

                <div class="form-group">
                    <label for="payment_type" class="label">Payment Type</label>
                    <select id="payment_type" name="payment_type" class="input-field form-control">
                        <option value="">Select Payment Type</option>
                        <option value="cash">Cash</option>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                    </select>
                </div>
            @endif

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Borrow</button>
            </div>
        </form>
    </div>
</section>
@endsection

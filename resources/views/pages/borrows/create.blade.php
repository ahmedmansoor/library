@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-5">
            <h4 class="h4">Record a checkout</h4>

        </div>
        <div class="container">
            <form method="POST" action="{{ route('borrows.store') }}" class="form">
                @csrf
                <div class="form-group">
                    <label class="label" for="borrower_id">Borrower</label>
                    <select id="borrower_id" name="borrower_id" class="input-field form-control" required>
                        @foreach($borrowers as $borrower)
                            <option value="{{ $borrower->id }}">{{ $borrower->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="label" for="book_id">Book</label>
                    <select id="book_id" name="book_id" class="input-field form-control" required>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="label" for="issue_date">Issue Date</label>
                    <input type="date" id="issue_date" name="issue_date" class="input-field form-control" required>
                </div>
                <div class="form-group">
                    <label class="label" for="due_date">Due Date</label>
                    <input type="date" id="due_date" name="due_date" class="input-field form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Record</button>
            </form>
        </div>
    </div>
</section>

@endsection

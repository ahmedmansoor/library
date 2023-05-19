@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-5">
            <h4 class="h4">Edit book</h4>
        </div>
        <form method="POST" action="{{ route('books.update', ['book' => $book->id]) }}" class="form">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="label">Book Name</label>
                <input type="text" id="name" name="name" class="input-field form-control" value="{{ $book->name }}" required>
            </div>
            <div class="form-group">
                <label for="title" class="label">Book Title</label>
                <input type="text" id="title" name="title" class="input-field form-control" value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
                <label for="author" class="label">Author</label>
                <input type="text" id="author" name="author" class="input-field form-control" value="{{ $book->author }}" required>
            </div>
            <div class="form-group">
                <label for="publisher_name" class="label">Publisher Name</label>
                <input type="text" id="publisher_name" name="publisher_name" class="input-field form-control" value="{{ $book->publisher_name }}" required>
            </div>
            <div class="form-group">
                <label for="book_category" class="label">Book Category</label>
                <input type="text" id="book_category" name="book_category" class="input-field form-control" value="{{ $book->book_category }}" required>
            </div>
            <div class="form-group">
                <label for="isbn" class="label">ISBN</label>
                <input type="text" id="isbn" name="isbn" class="input-field form-control" value="{{ $book->isbn }}" required>
            </div>
            <div class="form-group">
                <label for="year" class="label">Year</label>
                <input type="text" id="year" name="year" class="input-field form-control" value="{{ $book->year }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Book</button>
        </form>
    </div>
</section>
@endsection

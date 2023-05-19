@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-5">
            <h4 class="h4">New book</h4>
        </div>
        <div class="container">
            <form method="POST" action="{{ route('books.store') }}" class="form">
                @csrf
                <div class="form-group">
                    <label class="label" for="name">Book Name</label>
                    <input type="text" id="name" name="name" class="input-field form-control" required>
                </div>
                <div class="form-group">
                    <label class="label" for="title">Book Title</label>
                    <input type="text" id="title" name="title" class="input-field form-control" required>
                </div>
                <div class="form-group">
                    <label class="label" for="author">Author</label>
                    <input type="text" id="author" name="author" class="input-field form-control" required>
                </div>
                <div class="form-group">
                    <label class="label" for="publisher_name">Publisher Name</label>
                    <input type="text" id="publisher_name" name="publisher_name" class="input-field form-control" required>
                </div>
                <div class="form-group">
                    <label class="label" for="book_category">Book Category</label>
                    <input type="text" id="book_category" name="book_category" class="input-field form-control" required>
                </div>
                <div class="form-group">
                    <label class="label" for="isbn">ISBN</label>
                    <input type="text" id="isbn" name="isbn" class="input-field form-control" required>
                </div>
                <div class="form-group">
                    <label class="label" for="year">Year</label>
                    <input type="text" id="year" name="year" class="input-field form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Create Book</button>
            </form>
        </div>
    </div>
</section>

@endsection

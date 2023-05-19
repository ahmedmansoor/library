
@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')
<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="relative sm:rounded-lg">
            <div class="container mx-auto p-6 grid grid-cols-3 gap-6">
                <!-- First row -->
                <div class="card bg-blue-300 p-6 rounded-lg shadow-lg text-center">
                    <a href="{{ route('books.index') }}" class="text-white">Book List</a>
                </div>
                <div class="card bg-green-300 p-6 rounded-lg shadow-lg text-center">
                    <a href="{{ route('borrows.create') }}" class="text-white">Issue a Book</a>
                </div>
                <div class="card bg-red-300 p-6 rounded-lg shadow-lg text-center">
                    <a href="{{ route('returns.create') }}" class="text-white">Return a Book</a>
                </div>

                <!-- Second row -->
                <div class="card bg-yellow-300 p-6 rounded-lg shadow-lg text-center">
                    <a href="{{ route('borrowers.index') }}" class="text-white">Borrowers</a>
                </div>
                <div class="card bg-purple-300 p-6 rounded-lg shadow-lg text-center">
                    <a href="{{ route('books.create') }}" class="text-white">New Book</a>
                </div>
                <div class="card bg-orange-300 p-6 rounded-lg shadow-lg text-center">
                    <a href="{{ route('fines.index') }}" class="text-white">Fines</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

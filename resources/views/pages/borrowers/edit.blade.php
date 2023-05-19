@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-5">
            <h4 class="text-xl">Edit borrower</h4>
        </div>
        <form method="POST" action="{{ route('borrowers.update', ['borrower' => $borrower->id]) }}" class="form">
            @csrf
            @method('PUT')

            <label for="name" class="label">Name</label>
            <input type="text" id="name" name="name" class="input-field form-control" value="{{ $borrower->name }}" required>

            <label for="nic" class="label">NIC</label>
            <input type="text" id="nic" name="nic" class="input-field form-control" value="{{ $borrower->nic }}" required>

            <label for="phone_number" class="label">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" class="input-field form-control" value="{{ $borrower->phone_number }}" required>

            <label for="address" class="label">Address</label>
            <textarea id="address" name="address" class="input-field form-control" required>{{ $borrower->address }}</textarea>

            <button type="submit" class="btn btn-primary mt-3">
                Update Borrower
            </button>
        </form>
    </div>
</section>
@endsection

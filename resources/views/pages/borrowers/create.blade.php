@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-5">
            <h4 class="h4">New borrower</h4>
        </div>
        <div class="container">
            <form method="POST" action="{{ route('borrowers.store') }}" class="form">
                @csrf
                <div class="form-group">
                    <label for="name" class="label">Name</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control input-field" name="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="label">Email</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control input-field" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" class="label">Phone</label>
                    <div class="col-md-6">
                        <input id="phone" type="text" class="form-control input-field" name="phone" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Add Borrower
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

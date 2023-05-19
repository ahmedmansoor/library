@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-5">
            <h4 class="h4">Return a book</h4>
        </div>
        <div class="container">
            <form action="{{ route('returns.create') }}" method="GET" class="form mb-4">
                @csrf
                <label for="borrower_name" class="label">Borrower Name</label>
               <input type="text" id="borrower_name" name="borrower_name" class="input-field form-control" value="{{ request('borrower_name') }}" required>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <table class="table-style">
            <thead class="thread">
                <tr>
                    <th class="th">Book Title</th>
                    <th class="th">Due Date</th>
                    <th class="th">Status</th>
                    <th class="th">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($borrowInfo as $info)
                <tr class="tr">
                    <td class="td-main">{{ $info['book_title'] }}</td>
                    <td class="td">{{ $info['due_date']->format('d/m/Y') }}</td>
                    <td class="td">{{ $info['is_late'] ? 'Late' : 'On Time' }}</td>
                    <td class="td">
                        <a href="{{route('borrows.edit', ['borrow' => $info['borrow_id']])}}" class="btn btn-primary">Return</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection

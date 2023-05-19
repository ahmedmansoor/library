
@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <div class="flex flex-row justify-between mb-10">
            <h4 class="text-xl">Borrows</h4>
            <div>
                <a href="{{route('returns.create')}}" class="btn-primary" />
                    Return book
                </a>
                <a href="{{route('borrows.create')}}" class="btn-primary" />
                Record a checkout
                </a>
            </div>
        </div>
        <div class="relative shadow sm:rounded-lg">
            <table class="table-style">
                <thead class="thread">
                    <tr>
                        <th scope="col" class="th">
                            Borrower Name
                        </th>
                        <th scope="col" class="th">
                            Book Title
                        </th>
                        <th scope="col" class="th">
                            Issue Date
                        </th>
                        <th scope="col" class="th">
                            Return Date
                        </th>
                        <th scope="col" class="th">
                            Days Due
                        </th>
                        <th scope="col" class="th">
                            Is Late
                        </th>
                        <th scope="col" class="th">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if($borrows)
                    @foreach($borrows as $borrow)
                    <tr class="tr">
                        <td scope="row" class="td-main">
                            {{ $borrow->borrower->name }}
                        </td>
                        <td class="td-main">
                            {{ $borrow->book->title }}
                        </td>
                        <td class="td">
                            {{ $borrow->issue_date ? $borrow->issue_date->format('d/m/Y') : '' }}
                        </td>
                        <td class="td">
                            {{ $borrow->return_date ? $borrow->return_date->format('d/m/Y') : 'Not returned yet' }}
                        </td>
                        <td class="td">
                             {{ $borrow->days_due > 0 ? $borrow->days_due . ' days due' : 'No due' }}
                        </td>
                        <td class="td">
                           {{ $borrow->is_late ? 'Yes' : 'No' }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button id="dropdownMenuIconButton{{ $borrow->id }}" data-dropdown-toggle="dropdownDots{{ $borrow->id }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-bg_dark dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </button>
                        </td>
                    </tr>
                    @include('pages.borrows.index-dropdown')
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection


@extends('layouts.app')
@section('content')
@include ('alerts.flash-messages')

<section class="wrapper flex flex-col md:flex-row md:justify-between md:space-x-10">
    <div class="ml-72 w-2/3">
        <h4 class="h4">Books</h4>
        <div class="relative shadow sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-bg_darker dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Author
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Publisher Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Year
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if($books)
                    @foreach($books as $book)
                    <tr class="bg-white border-b dark:bg-bg_dark dark:border-bg_darker hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="px-6 py-4">
                            {{ $book->name }}
                        </td>
                        <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $book->title }}
                        </th>
                        <td class="px-6 py-4">
                        {{ $book->author }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $book->publisher_name }}
                        </td>
                        <td class="px-6 py-4">
                        {{ $book->year }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button id="dropdownMenuIconButton{{ $book->id }}" data-dropdown-toggle="dropdownDots{{ $book->id }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-bg_dark dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                            </button>
                        </td>
                    </tr>
                    @include('pages.books.index-dropdown')
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection

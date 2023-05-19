<div id="dropdownDots{{ $book->id }}" class="z-10 hidden bg-white divide-y divide-gray-100
    rounded-lg shadow w-max dark:bg-bg_darker dark:divide-gray-600">
    <ul class="text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton{{ $book->id }}">
      <li>
        <a href="{{route('books.edit', ['book' => $book->id])}}" class="flex flex-row justify-between space-x-3 px-3 py-2 hover:bg-gray-100
        dark:hover:bg-gray-600 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            <span>
                View
            </span>
        </a>
      </li>
      <li>
        <a href="#" class="flex flex-row justify-between space-x-3 px-3 py-2 hover:bg-gray-100
        dark:hover:bg-gray-600 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34"></path><polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon></svg>
            <span>
                Edit
            </span>
        </a>
      </li>
    </ul>
    <div>
        <a href="#" class="flex flex-row justify-between space-x-3 px-3 py-2 text-red-600 text-sm
        hover:bg-red-50 dark:hover:bg-red-600 dark:text-red-700 dark:hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
            <span>
                Delete
            </span>
        </a>
    </div>
</div>

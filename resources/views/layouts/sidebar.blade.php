
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex
items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-bg_dark dark:focus:ring-gray-600">
   <span class="sr-only"></span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full md:translate-x-0" aria-label="Sidebar">
   <div class="h-full backdrop-filter backdrop-blur-lg bg-opacity-30 flex flex-col px-2 py-3 overflow-y-auto bg-gray-50 dark:bg-bg_dark border-r border-primary border-opacity-10">
        <div class="flex flex-row justify-between">
            <a href="" class="p-3 flex items-center w-full text-gray-800  space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                </svg>
                <span class="text-md pt-1.5 font-bold text-lg dark:text-gray-100 rounded-lg dark-mode:text-white">
                    Library Manager
                </span>
            </a>
        </div>
        <ul class="space-y-2 flex-1 px-2 mt-5">
            <li>
                <a href="{{route('books.index')}}" class="{{(request()->is('*books*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/></svg>
                <span class="ml-2">Books</span>
                </a>
            </li>
            <li>
                <a href="{{route('borrowers.index')}}" class="{{(request()->is('*borrowers*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Borrowers</span>
                </a>
            </li>
            <li>
                <a href="{{route('borrows.index')}}" class="{{(request()->is('*borrows*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M20.4 14.5L16 10 4 20"/></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Borrows</span>
                </a>
            </li>
            <li>
                <a href="{{route('fines.index')}}" class="{{(request()->is('*fines*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 15v4c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2v-4M17 9l-5 5-5-5M12 12.8V2.5"/></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Fines</span>
                </a>
            </li>
        </ul>
        <div class="mx-2 flex flex-row justify-between space-x-4">
            <form method="POST" action="{{ route('logout') }}" class="p-1 py-2 text-gray-600 hover:text-red-700 no-underline
            px-2 hover:bg-red-100 bg-gray-100 rounded-md w-full">
            <button type="submit" class="text-sm justify-between
            flex flex-row w-full">
                @csrf
                    {{ __('Log Out') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M10 3H6a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h4M16 17l5-5-5-5M19.8 12H9"/></svg>
                </button>
            </form>
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-bg_dark focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>
        </div>
   </div>
</aside>


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex
items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-bg_dark dark:focus:ring-gray-600">
   <span class="sr-only"></span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full md:translate-x-0" aria-label="Sidebar">
   <div class="h-full backdrop-filter backdrop-blur-lg bg-opacity-30 flex flex-col p-2 overflow-y-auto bg-gray-50 dark:bg-bg_dark border-r border-primary border-opacity-10">
        <div class="flex flex-row justify-between">
            <a href="" class="p-3 flex items-center w-full text-gray-800  space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mt-1">
                    <path fill-rule="evenodd" d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z" clip-rule="evenodd" />
                </svg>
                <span class="text-md pt-1.5 font-bold text-lg dark:text-gray-100 rounded-lg dark-mode:text-white">
                    Library Manager
                </span>
            </a>
        </div>
        <ul class="space-y-2 flex-1 px-2 mt-5">
            <li>
                <a href="{{ url('/dashboard') }}" class="{{(request()->is('*dashboard*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M21 12H3M12 3v18"/></svg>
                <span class="ml-2">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{route('books.index')}}" class="{{(request()->is('*books*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="ml-2">Books</span>
                </a>
            </li>
            <li>
                <a href="{{route('borrowers.index')}}" class="{{(request()->is('*borrowers*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Borrowers</span>
                </a>
            </li>
            <li>
                <a href="{{route('borrows.index')}}" class="{{(request()->is('*borrows*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Borrows</span>
                </a>
            </li>
            <li>
                <a href="{{route('fines.index')}}" class="{{(request()->is('*fines*')) ?
                'flex items-center p-2 text-base rounded-lg text-primary dark:text-white bg-primary bg-opacity-10 dark:bg-bg_darker'
                :
                'flex items-center p-2 text-base text-gray-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-bg_dark'
                }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                </svg>
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

@if ($errors->any())
<div class="alert alert-info alert-block absolute right-32 flex z-50 pt-5" role="alert">
    <div class="flex bg-blue-100 rounded-lg p-2 text-blue-700 dark:text-blue-800 dark:bg-blue-200">
        <svg xmlns=" http://www.w3.org/2000/svg" class="h-6 w-6 mt-0.5" viewBox="0 0 20 20" fill="#007bc3">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
        </svg>
        <ul style="color:#007bc3;" class="text-sm font-medium px-2 mt-1">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button onclick="hideAlert()" type="button" class=" text-gray-700
             rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 inline-flex
             dark:text-gray-600 hover:bg-white" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6b7284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
</div>
@endif


@if ($message = Session::get('success'))
<div class="alert absolute right-32 flex z-50 pt-5" role="alert">
    <div class="flex bg-green-100 rounded-lg p-2 text-green-700 dark:text-green-800 dark:bg-green-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="text-sm font-medium px-2 mt-1">
            {{ $message }}
        </span>

        <button onclick="hideAlert()" type="button" class="
             rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 inline-flex
             dark:text-gray-600 hover:bg-white" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert absolute right-32 flex z-50 pt-5" role="alert">
    <div class="flex bg-red-100 rounded-lg p-2 text-red-700 dark:text-red-800 dark:bg-red-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
        <span style="color:#a73020;" class="text-sm font-medium px-2 mt-1">
            {{ $message }}
        </span>

        <button onclick="hideAlert()" type="button" class=" text-gray-700
             rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 inline-flex
             dark:text-gray-600 hover:bg-white" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6b7284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
</div>
@endif



@if ($message = Session::get('warning'))
<div class="alert absolute right-32 flex z-50 pt-5" role="alert">
    <div class="flex bg-orange-100 rounded-lg p-2 text-orange-700 dark:text-orange-800 dark:bg-orange-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
        <span style="color:#a73020;" class="text-sm font-medium px-2 mt-1">
            {{ $message }}
        </span>

        <button onclick="hideAlert()" type="button" class=" text-gray-700
             rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 inline-flex
             dark:text-gray-600 hover:bg-white" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#b43403" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert absolute right-32 flex z-50 pt-" role="alert">
    <div class="flex bg-white shadow rounded-lg p-2 text-gray-400 dark:text-gray-800 dark:bg-gray-200">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-7.536 5.879a1 1 0 001.415 0 3 3 0 014.242 0 1 1 0 001.415-1.415 5 5 0 00-7.072 0 1 1 0 000 1.415z" clip-rule="evenodd" />
        </svg> --}}
        <span class="text-sm font-medium px-2 mt-1">
            {{ $message }}
            {{-- No results found --}}

        </span>

        <button onclick="hideAlert()" type="button" class=" text-gray-700
             rounded-lg focus:ring-2 focus:ring-gray-400 p-1.5 inline-flex
             dark:text-gray-600 hover:bg-white" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#6b7284" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>
</div>

@endif


{{-- @if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Please check the form below for errors
</div>
@endif --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    function hideAlert() {
        var x = document.getElementsByClassName("alert");
        if (x[0].style.display === "none") {
            x[0].style.display = "block";
        } else {
            x[0].style.display = "none";
        }
    }

    setTimeout(function() {
        $('.alert').delay(5000).fadeOut(600);
    }, 1000);

</script>

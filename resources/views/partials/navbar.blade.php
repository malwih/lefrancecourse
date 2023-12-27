<header class="fixed w-full z-20 top-0 start-0 border-b bg-white shadow-lg h-13 hidden md:flex">
    <a href="/" class="border flex-shrink-0 flex items-center justify-center px-4 lg:px-6 xl:px-8">
        <img class="" src="../storage/img/logo.png" height="50" width="100" />
    </a>
    <nav class="header-links contents font-semibold text-base lg:text-lg">
        <ul class="flex items-center ml-4 xl:ml-8 mr-auto">
            <a href="/">
                <li class="p-3 xl:p-6 hover:bg-gray-300 text-orange-500">
                    <span>Home</span>
                </li>
            </a>
            <a href="/courses">
                <li class="p-3 xl:p-6 hover:bg-gray-300 text-orange-500 {{ ($title === "courses") ? 'active' : '' }}">
                    <span>Courses</span>
                </li>
            </a>
            <a href="">
                <li class="p-3 xl:p-6 hover:bg-gray-300 text-orange-500 {{ ($title === "News") ? 'active' : '' }}">
                    <span>News</span>
                </li>
            </a>
        </ul>
    </nav>
    <div class="border flex items-center px-4 lg:px-6 xl:px-8">
        @auth
        <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="flex bg-black hover:bg-orange-400 text-xs text-white font-bold px-4 xl:px-6 py-2 xl:py-3 rounded" type="button"> Welcome, {{ auth()->user()->name }}<svg class="w-2.5 h-2.5 ms-3 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="multi-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-black">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
                <li>
                    <a href="/dashboard" class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-orange-400 dark:hover:text-white">My Dashboard</a>
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="flex justify-left w-full dropdown-item px-4 py-2 hover:bg-gray-100 dark:hover:bg-orange-400 dark:hover:text-white">Logout</button></a>
                    </form>
                </li>
            </ul>
        </div>
        @else
        <a href="/login"><button type="button" class="flex items-center justify-center self-center bg-black hover:bg-orange-400 text-xs text-white font-bold px-4 xl:px-6 py-2 xl:py-3 rounded {{ ($active === "login") ? 'active' : '' }}">
            <img class="h-3.5 w-3.5 mr-1.5 flex items-center self-center" src="../storage/icon/icon-login.png" alt="">Login</button></a>
        @endauth

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </div>
    </div>
</header>
<div class="relative top-[60px]">
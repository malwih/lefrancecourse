<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
          <span class="sr-only">Open sidebar</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
          </svg>
        </button>
        <a href="/dashboard" class="flex ms-10 md:me-24">
          <img src="https://i.ibb.co/kDfyd1Y/logo.png" class="h-10 me-5" alt="Le France Course" />
        </a>
      </div>
      <div class="items-center">
      @auth
        <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="flex bg-orange-500 hover:bg-orange-600 text-xs text-white font-bold px-4 xl:px-6 py-2 xl:py-3 rounded" type="button"> Welcome, {{ auth()->user()->name }}<svg class="w-2.5 h-2.5 ms-3 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="multi-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
                <li>
                    <a href="/" class="dropdown-item block px-4 py-2 hover:bg-gray-100 dark:hover:bg-orange-500 dark:hover:text-white">Home</a>
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="flex justify-left w-full dropdown-item px-4 py-2 hover:bg-orange-100 dark:hover:bg-orange-500 dark:hover:text-white"><img class="w-4 h-4 flex items-center self-center mr-1.5" src="../storage/icon/icon-logout.png" alt="">Logout</button></a>
                    </form>
                </li>
            </ul>
        </div>
        @else
        <a href="/login"><button type="button" class="flex bg-black hover:bg-orange-400 text-xs text-white font-bold px-4 xl:px-6 py-2 xl:py-3 rounded {{ ($active === "login") ? 'active' : '' }}">
                Login
            </button></a>
        @endauth

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
      </div>
    </div>
</nav>